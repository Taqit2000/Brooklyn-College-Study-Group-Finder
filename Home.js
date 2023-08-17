

/*
function validateEmail(email) 
{
      // Regular expression pattern to match email ending with @bcmail.cuny.edu
      var pattern = /^[a-zA-Z0-9._%+-]+@bcmail\.cuny\.edu$/;
      return pattern.test(email);
    }

    function submitForm() {
      var emailInput = document.getElementById("email");
     // var resultMessage = document.getElementById("resultMessage");

      if (validateEmail(emailInput.value))
{
           

     
 }


       else

        {
        alert("Invalid Email   !!!");
     }



  }
  */


/*
function startCountdown() 
      {
            var now = new Date();
            var target = new Date();
            target.setHours(17, 0, 0, 0); // Set the target time to 5 PM

            if (now >= target) 
            {
                // If current time is after 5 PM, set target to next day 5 PM
                target.setDate(target.getDate() + 1);
            }

            var countdown = setInterval(function() 
            {
                var currentTime = new Date();
                var timeDifference = target - currentTime;

                if (timeDifference <= 0) 
                {
                    clearInterval(countdown);
                    startCountdown(); // Start a new countdown for the next day
                    return;
                }

                var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                var ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12; 

                var formattedTime = (hours < 10 ? "0" : "") + hours + ":" +
                                   (minutes < 10 ? "0" : "") + minutes + ":" +
                                   (seconds < 10 ? "0" : "") + seconds;

                document.getElementById("countdown1").textContent = "Countdown: " + formattedTime;

          }, 1000);

             
        }
startCountdown(); 
       // Start the initial countdown

*/


/*
  function startCountdown1() 
  {
            var now = new Date();
            var target = new Date();
            target.setHours(17, 0, 0, 0); // Set the target time to 5 PM

            if (now >= target) 
            {
                // If current time is after 5 PM, set target to next day 5 PM
                target.setDate(target.getDate() + 1);
                target.setHours(17, 0, 0, 0); // this was changed 
            }

            var countdown = setInterval(function() {
                var currentTime = new Date();
                var timeDifference = target - currentTime;

                if (timeDifference <= 0) {
                    clearInterval(countdown);
                    startCountdown1(); // Start a new countdown for the next day
                    return;
                }

                var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Convert hours to 12-hour format with AM/PM
                var ampm = hours >= 12 ? 'Hours' : 'Hours';
                hours = hours % 12;
                hours = hours ? hours : 12; // 0 should be displayed as 12

                var formattedTime = (hours < 10 ? "0" : "") + hours + ":" +
                                   (minutes < 10 ? "0" : "") + minutes + ":" +
                                   (seconds < 10 ? "0" : "") + seconds + " " + ampm;

                document.getElementById("countdown1").textContent = "Begins in: " + formattedTime;
            }, 1000);

         

        }
   
      startCountdown1();   
*/

function startCountdown1() {
    var now = new Date();
    var target = new Date();

    // Set the target time to 5 PM
    target.setHours(17, 0, 0, 0);

    // If current time is after 5 PM, set target to next day 5 PM
    if (now >= target) {
        target.setDate(target.getDate() + 1);
        target.setHours(17, 0, 0, 0);
    }

    var countdown = setInterval(function() {
        var currentTime = new Date();
        var timeDifference = target - currentTime;

        if (timeDifference <= 0) {
            clearInterval(countdown);
            startCountdown1(); // Start a new countdown for the next day
            return;
        }

        var hours = Math.floor(timeDifference / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById("countdown1").textContent = "Begins in: " +
            hours + " hours " + minutes + " minutes";
    }, 1000);
}

startCountdown1();


/*
 function startCountdown2() 
  {
            var now = new Date();
            var target = new Date();
            target.setHours(18, 0, 0, 0); // Set the target time to 5 PM

            if (now >= target) 
            {
                // If current time is after 5 PM, set target to next day 5 PM
                target.setDate(target.getDate() + 1);
            }

            var countdown = setInterval(function() {
                var currentTime = new Date();
                var timeDifference = target - currentTime;

                if (timeDifference <= 0) {
                    clearInterval(countdown);
                    startCountdown(); // Start a new countdown for the next day
                    return;
                }

                var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Convert hours to 12-hour format with AM/PM
                var ampm = hours >= 12 ? 'Hours' : 'Hours';
                hours = hours % 12;
                hours = hours ? hours : 12; // 0 should be displayed as 12

                var formattedTime = (hours < 10 ? "0" : "") + hours + ":" +
                                   (minutes < 10 ? "0" : "") + minutes + ":" +
                                   (seconds < 10 ? "0" : "") + seconds + " " + ampm;

                document.getElementById("countdown2").textContent = "Begins in: " + formattedTime;
            }, 1000);

         

        }
   
      startCountdown2(); 



 function startCountdown3() 
  {
            var now = new Date();
            var target = new Date();
            target.setHours(19, 0, 0, 0); // Set the target time to 5 PM

            if (now >= target) 
            {
                // If current time is after 5 PM, set target to next day 5 PM
                target.setDate(target.getDate() + 1);
            }

            var countdown = setInterval(function() {
                var currentTime = new Date();
                var timeDifference = target - currentTime;

                if (timeDifference <= 0) {
                    clearInterval(countdown);
                    startCountdown(); // Start a new countdown for the next day
                    return;
                }

                var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Convert hours to 12-hour format with AM/PM
                var ampm = hours >= 12 ? 'Hours' : 'Hours';
                hours = hours % 12;
                hours = hours ? hours : 12; // 0 should be displayed as 12

                var formattedTime = (hours < 10 ? "0" : "") + hours + ":" +
                                   (minutes < 10 ? "0" : "") + minutes + ":" +
                                   (seconds < 10 ? "0" : "") + seconds + " " + ampm;

                document.getElementById("countdown3").textContent = "Begins in: " + formattedTime;
            }, 1000);

         

        }
   
      startCountdown3(); 

*/


 function time()
  {
            const colors = ["7B2240", "FFFFFF"];
            var currentIndex = 0;

            function updateColor() {
                document.getElementById("countdown1").style.color = "#"+colors[currentIndex];
                document.getElementById("countdown2").style.color = "#"+colors[currentIndex];
                document.getElementById("countdown3").style.color = "#"+colors[currentIndex];
                currentIndex = (currentIndex + 1) % colors.length;
            }

            setInterval(updateColor, 1000); // Change color every second
        }

        time();


function startCountdown2() {
    var now = new Date();
    var target = new Date();

    // Set the target time to 5 PM
    target.setHours(17, 0, 0, 0);

    // If current time is after 5 PM, set target to next day 5 PM
    if (now >= target) {
        target.setDate(target.getDate() + 1);
        target.setHours(17, 0, 0, 0);
    }

    var countdown = setInterval(function() {
        var currentTime = new Date();
        var timeDifference = target - currentTime;

        if (timeDifference <= 0) {
            clearInterval(countdown);
            startCountdown2(); // Start a new countdown for the next day
            return;
        }

        var hours = Math.floor(timeDifference / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById("countdown2").textContent = "Begins in: " +
            hours + " hours " + minutes + " minutes";
    }, 1000);
}

startCountdown2();





function startCountdown3() {
    var now = new Date();
    var target = new Date();

    // Set the target time to 5 PM
    target.setHours(17, 0, 0, 0);

    // If current time is after 5 PM, set target to next day 5 PM
    if (now >= target) {
        target.setDate(target.getDate() + 1);
        target.setHours(17, 0, 0, 0);
    }

    var countdown = setInterval(function() {
        var currentTime = new Date();
        var timeDifference = target - currentTime;

        if (timeDifference <= 0) {
            clearInterval(countdown);
            startCountdown3(); // Start a new countdown for the next day
            return;
        }

        var hours = Math.floor(timeDifference / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById("countdown3").textContent = "Begins in: " +
            hours + " hours " + minutes + " minutes";
    }, 1000);
}

startCountdown3();