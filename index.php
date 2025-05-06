<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap');
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  border-radius: 8px;
}

section {
   
  position: relative;
  min-height: 100vh;
  background:linear-gradient(rgba(32, 32, 32, 0.7),rgba(27, 27, 27, 0.7)), url(images/hero-bg.jpg);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 500px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #555;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;
}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}

</style>
<body>
    
    <section>
        <div class="container">
          <div class="user signinBx">
            <div class="imgBx"><img src="https://img.freepik.com/premium-photo/wow-look-advertise-here-portrait-amazed-cute-girl-pointing-empty-space-background-preschool-girl-yellow-background_170532-4874.jpg" alt="" /></div>
            <div class="formBx">
              <form action="connect.php" method="POST" >
                <h2>Sign In</h2>
                <input type="text" name="username" placeholder="Username" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="submit" name="action" value="Login" />
                <p class="signup">
                  Don't have an account ?
                  <a href="#" onclick="toggleForm();">Sign Up.</a>
                </p>
              </form>
            </div>
          </div>
          <div class="user signupBx">
            <div class="formBx">
              <form action="connect.php" method="POST" >
                <h2>Create an account</h2>
                <input type="text" name="username" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email Address" required/>
                <input type="password" name="password" placeholder="Create Password"required />
                <!-- <input type="password" name="conpassword" placeholder="Confirm Password" required/> -->
                <input type="submit" name="action" value="Sign Up" />
                <p class="signup">
                  Already have an account ?
                  <a href="#" onclick="toggleForm();">Sign in.</a>
                </p>
              </form>
            </div>
            <div class="imgBx"><img src="https://t4.ftcdn.net/jpg/02/04/99/01/360_F_204990175_ufJCA2TjOo0Kj8FG8OT0QWJ2m2EppHNZ.jpg" alt="" /></div>
          </div>
        </div>
      </section>


      <script>
        const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
      </script>
</body>
</html>











