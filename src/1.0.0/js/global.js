const clearUndefinedStorage = () => {
    if (localStorage.getItem('dplrid') === "undefined") {
        localStorage.clear();
    }
}

const convertStringEventToArray = () => {
    let eventsArray = localStorage.getItem('events');

    if (eventsArray) {
        try {
            // Try to parse the value as JSON (array)
            eventsArray = JSON.parse(eventsArray);

            if (!Array.isArray(eventsArray)) {
                // If it is not an array, create a new array and add the value
                eventsArray = [eventsArray];
                localStorage.setItem('events', JSON.stringify(eventsArray));
            }

        } catch (error) {
            // If it cannot be parsed as JSON, assume it is a single value and create a new array
            eventsArray = [eventsArray];
            localStorage.setItem('events', JSON.stringify(eventsArray));
        }
    }
}

const fixDplridUpdateEvents = () => {
    const currentEvents = localStorage.getItem('events');
    const expectedEvents = '["ecommerce24","digital-trends24"]';
    if (currentEvents === expectedEvents) {
      localStorage.clear();
    }
  };

fixDplridUpdateEvents();
clearUndefinedStorage();
convertStringEventToArray();
