<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Validate session variables with fallbacks
$first_name = $_SESSION['first_name'] ?? 'Guest';
$last_name = $_SESSION['last_name'] ?? ''; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .user-panel {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 20px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* From Uiverse.io by escannord */ 
.card {
  /* background-color: #171717; */
  perspective: 1000px;
  padding: 10px;
  border-radius: 5px;
  position: relative;
}
.heading {
  color: white;
  background-color: black;
  border-radius: 3px;
  padding: 5px;
  font-weight: bolder;
  animation: beat 1s infinite linear;
  position: absolute;
  top: 1px;
}
.icons {
  background-color: rgba(204, 0, 255, 0.185);
  transform: rotate(3deg);
  padding: 5px;
  border-radius: 10px;
  position: absolute;
  bottom: 16%;
  width: 90%;
  text-align: center;
  display: flex;
  justify-content: space-around;
  transition: all 0.3s;
}
.icons:hover {
  transform: rotate(3deg) rotateX(45deg);
  height: 90px;
}
.icons a {
  background-color: rgb(255, 255, 255);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  position: relative;
  transition: all 0.3s;
}

.icons .instagram:hover {
  box-shadow: 0 5px 0px 5px #e41d6dc4, 0 10px 0px 10px #e41d6d8c,
    0 15px 0px 15px #e41d6d49;
}

.icons .x:hover {
  box-shadow: 0 5px 0px 5px #000000c4, 0 10px 0px 10px #0000008c,
    0 15px 0px 15px #00000049;
}

.icons .discord:hover {
  box-shadow: 0 5px 0px 5px #5661eac4, 0 10px 0px 10px #5661ea8c,
    0 15px 0px 15px #5661ea49;
}

.icons a svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  fill: transparent;
  border-color: rgb(176, 7, 255);
  color: rgb(209, 30, 99);
}

.icons a::before {
  display: none;
  position: absolute;
  content: "";
  border: solid 10px transparent;
  border-right-color: aliceblue;
  top: -120px;
  right: -200px;
  transition: all 0.3s;
}

.icons a::after {
  display: none;
  width: auto;
  background-color: transparent;
  color: white;
  padding: 10px;
  border-radius: 10px;
  position: absolute;
  top: -130px;
  right: -243px;
  transition: all 0.3s;
}
.icons .instagram {
  background: linear-gradient(
    45deg,
    #f09433,
    #e6683c,
    #dc2743,
    #e41d6d,
    #f80bad
  );
}

.icons .instagram svg {
  color: white;
}
.icons .x {
  background: black;
}

.icons .x svg {
  color: white;
}
.icons .discord {
  background: #5661ea;
}

.icons .discord svg {
  color: white;
}

.instagram::before {
  border-right-color: #e6683c !important;
  right: -142px !important;
}
.x::before {
  border-right-color: #000 !important;
  right: -87px !important;
}
.discord::before {
  border-right-color: #5661ea !important;
  right: -30px !important;
}
.instagram::after {
  content: "instagram";
  background: linear-gradient(
    45deg,
    #f09433,
    #e6683c,
    #dc2743,
    #e41d6d,
    #f80bad
  );
}
.x::after {
  content: "twitter";
  background-color: black !important;
  right: -160px !important;
}

.discord::after {
  content: "Discord";
  background-color: #5661ea !important;
  right: -110px !important;
}

.icons a:hover:after,
.icons a:hover:before {
  display: inline-block;
}

@keyframes beat {
  0% {
    transform: scale(1);
    box-shadow: 0px 0px 0px 0px black;
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0px 0px 0px 10px rgba(0, 0, 0, 0.247),
      0px 0px 0px 5px rgba(0, 0, 0, 0.404),
      0px 0px 0px 10px rgba(0, 0, 0, 0.534);
  }
}

    </style>
</head>
<body>
    <!-- From Uiverse.io by escannord --> 
<div class="card">
  <img
    class="image"
    alt=""
    src="https://uiverse.io/astronaut.png"
  />
  <div class="heading">We're on Social Media</div>
  <div class="icons">
    <a class="instagram" href="https://www.instagram.com/uiverse.io/">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 25"
        height="25"
        width="24"
      >
        <path
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="2"
          stroke="currentColor"
          d="M17.0459 7.5H17.0559M3.0459 12.5C3.0459 9.986 3.0459 8.73 3.3999 7.72C3.71249 6.82657 4.22237 6.01507 4.89167 5.34577C5.56096 4.67647 6.37247 4.16659 7.2659 3.854C8.2759 3.5 9.5329 3.5 12.0459 3.5C14.5599 3.5 15.8159 3.5 16.8269 3.854C17.7202 4.16648 18.5317 4.67621 19.201 5.34533C19.8702 6.01445 20.3802 6.82576 20.6929 7.719C21.0459 8.729 21.0459 9.986 21.0459 12.5C21.0459 15.014 21.0459 16.27 20.6929 17.28C20.3803 18.1734 19.8704 18.9849 19.2011 19.6542C18.5318 20.3235 17.7203 20.8334 16.8269 21.146C15.8169 21.5 14.5599 21.5 12.0469 21.5C9.5329 21.5 8.2759 21.5 7.2659 21.146C6.37268 20.8336 5.56131 20.324 4.89202 19.6551C4.22274 18.9862 3.71274 18.1751 3.3999 17.282C3.0459 16.272 3.0459 15.015 3.0459 12.501V12.5ZM15.8239 11.94C15.9033 12.4387 15.8829 12.9481 15.7641 13.4389C15.6453 13.9296 15.4304 14.392 15.1317 14.7991C14.833 15.2063 14.4566 15.5501 14.0242 15.8108C13.5917 16.0715 13.1119 16.2439 12.6124 16.318C12.1129 16.392 11.6037 16.3663 11.1142 16.2422C10.6248 16.1182 10.1648 15.8983 9.76082 15.5953C9.35688 15.2923 9.01703 14.9123 8.76095 14.4771C8.50486 14.0419 8.33762 13.5602 8.2689 13.06C8.13201 12.0635 8.39375 11.0533 8.99727 10.2487C9.6008 9.44407 10.4974 8.91002 11.4923 8.76252C12.4873 8.61503 13.5002 8.86599 14.3112 9.46091C15.1222 10.0558 15.6658 10.9467 15.8239 11.94Z"
        ></path>
      </svg>
    </a>
    <a class="x" href="https://twitter.com/uiverse_io">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        height="24"
        width="24"
      >
        <path
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="2"
          stroke="currentColor"
          d="M19.8003 3L13.5823 10.105L19.9583 19.106C20.3923 19.719 20.6083 20.025 20.5983 20.28C20.594 20.3896 20.5657 20.4969 20.5154 20.5943C20.4651 20.6917 20.3941 20.777 20.3073 20.844C20.1043 21 19.7293 21 18.9793 21H17.2903C16.8353 21 16.6083 21 16.4003 20.939C16.2168 20.8847 16.0454 20.7957 15.8953 20.677C15.7253 20.544 15.5943 20.358 15.3313 19.987L10.6813 13.421L4.64033 4.894C4.20733 4.281 3.99033 3.975 4.00033 3.72C4.00478 3.61035 4.03323 3.50302 4.08368 3.40557C4.13414 3.30812 4.20536 3.22292 4.29233 3.156C4.49433 3 4.87033 3 5.62033 3H7.30833C7.76333 3 7.99033 3 8.19733 3.061C8.38119 3.1152 8.55295 3.20414 8.70333 3.323C8.87333 3.457 9.00433 3.642 9.26733 4.013L13.5833 10.105M4.05033 21L10.6823 13.421"
        ></path>
      </svg>
    </a>
    <a class="discord" href="https://discord.gg/KD8ba2uUpT">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 25 25"
        height="25"
        width="25"
      >
        <path
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="2"
          stroke="currentColor"
          d="M11.5989 6.5003H14.2919C14.3851 6.5003 14.4764 6.47427 14.5555 6.42515C14.6347 6.37603 14.6985 6.30577 14.7399 6.2223L15.4179 4.8543C15.4664 4.75358 15.5488 4.67313 15.6506 4.62706C15.7524 4.58098 15.8673 4.57222 15.9749 4.6023C16.6309 4.7903 18.0049 5.2433 19.1029 6.0003C22.9669 8.8973 22.6069 15.3903 22.5779 16.7603C22.5765 16.8444 22.5541 16.9269 22.5129 17.0003C20.5299 20.5003 17.0899 20.5003 17.0899 20.5003L15.9239 18.0743M15.9239 18.0743C16.4479 17.9163 17.0029 17.7253 17.6029 17.5003M15.9239 18.0743C13.4799 18.8093 11.7219 18.8083 9.27791 18.0733M13.5989 6.5003H10.9109C10.8179 6.50039 10.7266 6.47451 10.6475 6.42557C10.5683 6.37664 10.5044 6.30659 10.4629 6.2233L9.77991 4.8533C9.73146 4.75279 9.64925 4.6725 9.54762 4.62644C9.446 4.58038 9.33142 4.57148 9.22391 4.6013C8.56891 4.7893 7.19291 5.2433 6.09391 6.0003C2.23091 8.8973 2.59091 15.3903 2.61991 16.7603C2.62132 16.8445 2.64366 16.9269 2.68491 17.0003C4.66791 20.5003 8.10791 20.5003 8.10791 20.5003L9.27791 18.0733M9.27791 18.0733C8.75491 17.9163 8.19891 17.7253 7.59891 17.5003M10.6009 12.5003C10.6009 12.7655 10.4956 13.0199 10.308 13.2074C10.1205 13.3949 9.86612 13.5003 9.60091 13.5003C9.33569 13.5003 9.08134 13.3949 8.8938 13.2074C8.70626 13.0199 8.60091 12.7655 8.60091 12.5003C8.60091 12.2351 8.70626 11.9807 8.8938 11.7932C9.08134 11.6057 9.33569 11.5003 9.60091 11.5003C9.86612 11.5003 10.1205 11.6057 10.308 11.7932C10.4956 11.9807 10.6009 12.2351 10.6009 12.5003ZM16.6029 12.5003C16.6029 12.7655 16.4976 13.0199 16.31 13.2074C16.1225 13.3949 15.8681 13.5003 15.6029 13.5003C15.3377 13.5003 15.0833 13.3949 14.8958 13.2074C14.7083 13.0199 14.6029 12.7655 14.6029 12.5003C14.6029 12.2351 14.7083 11.9807 14.8958 11.7932C15.0833 11.6057 15.3377 11.5003 15.6029 11.5003C15.8681 11.5003 16.1225 11.6057 16.31 11.7932C16.4976 11.9807 16.6029 12.2351 16.6029 12.5003Z"
        ></path>
      </svg>
    </a>
  </div>
</div> 

    <div class="user-panel">
        <h1>Welcome   <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <p>Make your days more memorable with us...</p>
        <a href="event.php" class="btn">BOOK YOUR DATE</a>
    </div>
</body>
</html>