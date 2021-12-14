window.onload = (event) => {
  const page = document.querySelector("#page");
  const enablePm = document.querySelector(".enable-pm");
  const disablePm = document.querySelector(".disable-pm");

  enablePm.addEventListener("click", function (event) {
    event.preventDefault();
    page.classList.add("pm-enabled");
    enterFullScreen();
  });

  disablePm.addEventListener("click", function (event) {
    event.preventDefault();
    page.classList.remove("pm-enabled");
    leaveFullScreen();
  });

  function enterFullScreen() {
    if (
      !document.fullscreenElement &&
      !document.webkitFullscreenElement &&
      !document.mozFullScreenElement &&
      !document.msFullscreenElement
    ) {
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      }
    }
  }

  function leaveFullScreen() {
    if (
      document.fullscreenElement ||
      document.webkitFullscreenElement ||
      document.mozFullScreenElement ||
      document.msFullscreenElement
    ) {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    }
  }

  document.onfullscreenchange = function (event) {
    if (!document.fullscreenElement) {
      document.querySelector("#page").classList.remove("pm-enabled");
    }
  };

  document.onwebkitfullscreenchange = function (event) {
    if (!document.webkitFullscreenElement) {
      document.querySelector("#page").classList.remove("pm-enabled");
    }
  };

  document.onmozfullscreenchange = function () {
    if (!document.mozFullScreenElement) {
      document.querySelector("#page").classList.remove("pm-enabled");
    }
  };

  document.onmsfullscreenchange = function () {
    if (!document.msFullscreenElement) {
      document.querySelector("#page").classList.remove("pm-enabled");
    }
  };
};
