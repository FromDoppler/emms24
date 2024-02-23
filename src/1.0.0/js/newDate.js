"use strict";

import { getSrcVersion } from "./common/version.js";

document.addEventListener('DOMContentLoaded', () => {

    const getCountryAndCode = async () => {
        const defaultCountry = {
            "countryName": "Argentina",
            "countryCode": "AR"
        };
        try {
            const response = await fetch('/services/getCountryNameAndCode.php');
            const countryResponse = await response.json();
            const isTarget = isTargetCountry(countryResponse);
            return (isTarget) ? countryResponse : defaultCountry;
        } catch (error) {
            console.error(error);
            throw error;
        }
    };

    const createImgElement = (countryName, countryCode) => {
        const img = document.createElement("img");
        img.src = `src/img/flags/${countryCode}.png`;
        img.alt = countryName;
        img.title = countryName;
        return img;
    }

    const isTargetCountry = ({ countryName, countryCode }) => {
        const targetCountries = ['AR', 'BO', 'CL', 'CO', 'CR', 'CU', 'DO', 'EC', 'ES', 'GD', 'GF', 'GY', 'HN', 'HT', 'JM', 'MX', 'NI', 'PA', 'PE', 'PR', 'PY', 'SR', 'SV', 'UY', 'VE'];
        return targetCountries.includes(countryCode);
    }

    const loadScriptAsync = (src) => {
        return new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.src = src;
            script.onload = resolve;
            script.onerror = reject;
            document.head.appendChild(script);
        });
    }

    const loadMomentAndTimezoneScripts = async () => {
        const currentSrcVersion = getSrcVersion();
        const momentScriptUrl = `src/${currentSrcVersion}/js/vendors/moment.min.js`;
        const momentTimezoneScriptUrl = `src/${currentSrcVersion}/js/vendors/moment-timezone-data.min.js`;

        try {
            await loadScriptAsync(momentScriptUrl);
            await loadScriptAsync(momentTimezoneScriptUrl);
            return true;
        } catch (error) {
            console.error('Error scripts load:', error);
            return false;
        }
    }

    const initDateChanges = async () => {

        // Se carga Moment.js junto con MomentTimezone y luego se ejecuta el codigo que lo usa
        await loadMomentAndTimezoneScripts();

        const eventDateTime = { eventYear: '2024', eventMonth: '04', eventDay: '18', eventHour: '10', eventMinute: '00' };
        const { eventHour, eventMinute } = eventDateTime;

        const moment = window.moment;



        const getLocalDate = (newEventHour = eventHour, newEventMinutes = eventMinute, eventDateTime, countryCode) => {
            const zonaHorariaUsuario = Intl.DateTimeFormat().resolvedOptions().timeZone;
            const { eventYear, eventMonth, eventDay, eventHour, eventMinute } = eventDateTime;

            let localDate;
            // Verificar si el desplazamiento de tiempo del usuario es -3 horas (Correspondiente al evento en Argentina)
            if (moment.tz.zone(zonaHorariaUsuario).utcOffset(Date.now()) === 180 || countryCode === 'AR') {
                // Si el usuario ya esta en un desplazamiento de -3 horas, no se aplica el desplazamiento adicional
                localDate = moment.utc(`${eventYear}-${eventMonth}-${eventDay}T${newEventHour}:${newEventMinutes}:00`);
            } else {
                // Si el usuario no esta en un desplazamiento de -3 horas, se aplica el desplazamiento
                const fechaUTC = moment.utc(`${eventYear}-${eventMonth}-${eventDay}T${newEventHour}:${newEventMinutes}:00`).utcOffset(-3);
                localDate = fechaUTC.clone().tz(zonaHorariaUsuario);
            }
            return localDate;
        }

        const updateContainerWithLocalDate = (containers, countryName, countryCode, eventDateTime) => {
            const img = createImgElement(countryName, countryCode);
            containers.forEach(container => {
                //Tomamos todo el contenido que esta dentro del span que contiene la bandera y la fecha
                const spanText = container.textContent;
                // Extraemos la hora y los minutos del span sabiendo que tiene el formato HH:mm
                const hourPattern = /\b(\d{1,2}):(\d{2})\b/;
                const hourMatch = spanText.match(hourPattern);
                const hours = parseInt(hourMatch[1], 10);
                const minutes = hourMatch[2].padStart(2, '0');
                //Transformamos esa hora al GTM del usuario
                const newLocalDate = getLocalDate(hours, minutes, eventDateTime, countryCode);
                const newHours = newLocalDate.hour();
                const newMinutes = newLocalDate.minute().toString().padStart(2, '0');
                container.innerHTML = '';
                container.appendChild(img);
                container.innerHTML += `(${countryCode === 'AR' ? 'ARG' : countryCode}) ${newHours}:${newMinutes}`;
            });
        };


        const setCalendarCountryAndDate = ({ countryName, countryCode }, eventDateTime) => {
            const flagContainers = document.querySelectorAll('.emms__calendar__date__country span');
            updateContainerWithLocalDate(flagContainers, countryName, countryCode, eventDateTime);

        }

        const setSpeakersCountryAndDate = ({ countryName, countryCode }, eventDateTime) => {
            const eventDateContainers = document.querySelectorAll('.emms__calendar__list__item__country span');
            updateContainerWithLocalDate(eventDateContainers, countryName, countryCode, eventDateTime);
        }

        const setCountryAndDate = (countryResponse, eventDateTime) => {
            setCalendarCountryAndDate(countryResponse, eventDateTime);
            setSpeakersCountryAndDate(countryResponse, eventDateTime);
        }

        const countryResponse = await getCountryAndCode();
        setCountryAndDate(countryResponse, eventDateTime);

    }

    initDateChanges();
});
