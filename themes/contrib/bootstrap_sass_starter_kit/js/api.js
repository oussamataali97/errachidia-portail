
  
  document.addEventListener("DOMContentLoaded", function () {
    let modal = document.getElementById("prayerTimesModal");
  
    let cities = {
        "Errachidia":{ id: 128, image: "tinghir.png" },
        "Tinghir": { id: 139, image: "tinghir.png" },
        "Zagora": { id: 137, image: "tinghir.png"},
        "Midelt": { id: 136, image: "tinghir.png" },
        "Ouarzazate": { id: 138, image: "tinghir.png" },
      };
  
    modal.addEventListener("show.bs.modal", function () {
      let grid = document.getElementById("prayer-times-grid");
      grid.innerHTML = "<p class='text-center'>Chargement...</p>";
  
      let today = new Date().toISOString().split("T")[0]; // Date actuelle
      let promises = [];
  
      Object.entries(cities).forEach(([city, data]) => {
        let apiUrl = `https://habous-prayer-times-api.onrender.com/api/v1/prayer-times?cityId=${data.id}`;
        promises.push(
          fetch(apiUrl)
            .then(response => {
              if (!response.ok) {
                throw new Error(`Erreur API pour ${city}: ${response.status}`);
              }
              return response.json();
            })
            .then(apiData => {
              if (apiData && apiData.data && apiData.data.timings) {
                let todayPrayer = apiData.data.timings.find(day => {
                  return `${day.date.gregorian.year}-${String(new Date(Date.parse(day.date.gregorian.month + " 1, 2025")).getMonth() + 1).padStart(2, '0')}-${String(day.date.gregorian.day).padStart(2, '0')}` === today;
                });
  
                if (todayPrayer) {
                  return {
                    city: city,
                    image: data.image,
                    prayers: todayPrayer.prayers
                  };
                }
              }
              return { city: city, image: data.image, error: "Pas de données disponibles" };
            })
            .catch(error => {
              console.error(error);
              return { city: city, image: data.image, error: "Erreur de chargement" };
            })
        );
      });
  
      Promise.all(promises).then(results => {
        grid.innerHTML = ""; // Vider la liste avant d'ajouter les nouveaux résultats
  
        results.forEach((result, index) => {
          if (index % 2 === 0) {
            let row = document.createElement("div");
            row.className = "row mb-3";
            grid.appendChild(row);
          }
          console.log(result.image);
          let row = grid.lastElementChild;
          let col = document.createElement("div");
          col.className = "col-md-6";
  
          col.innerHTML = `
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title city-title">${result.city}</h5>
                ${result.error ? `<p class="text-danger">${result.error}</p>` : `
                  <ul class="list-unstyled">
                    <li><strong>Fajr:</strong> ${result.prayers.fajr}</li>
                    <li><strong>Sunrise:</strong> ${result.prayers.sunrise}</li>
                    <li><strong>Dhuhr:</strong> ${result.prayers.dhuhr}</li>
                    <li><strong>Asr:</strong> ${result.prayers.asr}</li>
                    <li><strong>Maghrib:</strong> ${result.prayers.maghrib}</li>
                    <li><strong>Ishaa:</strong> ${result.prayers.ishaa}</li>
                  </ul>
                `}
              </div>
            </div>
          `;
  
          row.appendChild(col);
        });
      });
    });
  });
  

  // weather 


  document.addEventListener("DOMContentLoaded", function () {
    let modal2 = document.getElementById("weatherModal2");
  
    let cities = {
      "Errachidia": { lat: 31.9314, lon: -4.4244, image: "errachidia.jpg" },
      "Tinghir": { lat: 31.5070, lon: -5.8539, image: "tinghir.jpg" },
      "Ouarzazate": { lat: 30.9270, lon: -6.8930, image: "ouarzazate.jpg" },
      "Midelt": { lat: 32.6847, lon: -5.5244, image: "midelt.jpg" },
      "Zagora": { lat: 30.3296, lon: -5.8410, image: "zagora.jpg" }
    };
  
    modal2.addEventListener("show.bs.modal", function () {
      let grid = document.getElementById("weather-grid2");
      grid.innerHTML = "<p class='text-center'>Loading...</p>";
  
      let promises = [];
  
      Object.entries(cities).forEach(([city, data]) => {
        let apiUrl = `https://api.open-meteo.com/v1/forecast?latitude=${data.lat}&longitude=${data.lon}&current_weather=true&timezone=Africa/Casablanca`;
  
        promises.push(
          fetch(apiUrl)
            .then(response => response.json())
            .then(weatherData => {
                console.log(weatherData);
              if (weatherData && weatherData.current_weather) {
                return {
                  city: city,
                  image: data.image,
                  temperature: weatherData.current_weather.temperature,
                  wind: weatherData.current_weather.windspeed
                };
              }
              return { city: city, image: data.image, error: "No data available" };
            })
            .catch(error => {
              console.error(error);
              return { city: city, image: data.image, error: "Error loading data" };
            })
        );
      });
  
      Promise.all(promises).then(results => {
        grid.innerHTML = "";
  
        results.forEach((result, index) => {
          if (index % 2 === 0) {
            let row = document.createElement("div");
            row.className = "row mb-3";
            grid.appendChild(row);
          }
  
          let row = grid.lastElementChild;
          let col = document.createElement("div");
          col.className = "col-md-6";
  
          col.innerHTML = `
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title city-title">${result.city}</h5>
                ${result.error ? `<p class="text-danger">${result.error}</p>` : `
                  <ul class="list-unstyled">
                    <li><strong>Temperature:</strong> ${result.temperature}°C</li>
                    <li><strong>Vitesse du vent:</strong> ${result.wind} km/h</li>
                  </ul>
                `}
              </div>
            </div>
          `;
  
          row.appendChild(col);
        });
      });
    });
  });
  


  

  document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("tooltip-button");
    const tooltip = document.getElementById("tooltip");
  
    // Tooltip text you want to display
    const tooltipText = "Météo de la region";
  
    // When mouse enters the button, show the tooltip
    button.addEventListener("mouseenter", function (event) {
      tooltip.textContent = tooltipText;  // Set the tooltip text
      tooltip.classList.add("visible"); // Make the tooltip visible
    });
  
    // When mouse leaves the button, hide the tooltip
    button.addEventListener("mouseleave", function () {
      tooltip.classList.remove("visible"); // Hide the tooltip
    });
  

  });
  

  document.addEventListener("DOMContentLoaded", function () {
    const button2 = document.getElementById("tooltip-button2");
    const tooltip = document.getElementById("tooltip");
  
    // Tooltip text you want to display
    const tooltipText2 = "Horaire Prière de la region";
  
    // When mouse enters the button, show the tooltip
    button2.addEventListener("mouseenter", function (event) {
      tooltip.textContent = tooltipText2;  // Set the tooltip text
      tooltip.classList.add("visible"); // Make the tooltip visible
    });
  
    // When mouse leaves the button, hide the tooltip
    button2.addEventListener("mouseleave", function () {
      tooltip.classList.remove("visible"); // Hide the tooltip
    });
  

  });
  

  function openModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
}

document.addEventListener("DOMContentLoaded", function() {
    var primaryNavbar = document.querySelector(".primary-navbar2");
    var topNavbarHeight = 54; // Hauteur de la top navbar

    window.addEventListener("scroll", function() {
        if (window.scrollY > topNavbarHeight) {
            primaryNavbar.style.top = "0"; // Fixe la navbar en haut
            primaryNavbar.style.boxShadow = "0 10px 20px -20px rgba(0, 0, 0, 0.8)";
          } else {
            primaryNavbar.style.top = topNavbarHeight + "px"; // La remet sous la top navbar
        }
    });
});



document.addEventListener("DOMContentLoaded", function() {
  let dropdownParents = document.querySelectorAll(".parent-link");

  dropdownParents.forEach((parent) => {
    parent.addEventListener("click", function(event) {
      let parentLi = this.parentElement;

      if (window.innerWidth < 992) { // Seulement en mode mobile
        if (!parentLi.classList.contains("show")) {
          event.preventDefault(); // Empêche la navigation
          document.querySelectorAll(".nav-item.show").forEach(item => item.classList.remove("show"));
          parentLi.classList.add("show");
        } else {
          window.location.href = this.getAttribute("href"); // Navigue au 2e clic
        }
      }
    });
  });

  // Fermer le dropdown si on clique en dehors
  document.addEventListener("click", function(event) {
    if (!event.target.closest(".nav-item.dropdown")) {
      document.querySelectorAll(".nav-item.show").forEach(item => item.classList.remove("show"));
    }
  });
});

