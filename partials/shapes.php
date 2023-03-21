

  <div class="circle-one"></div>
  <div class="circle-two"></div>

  <svg class="first-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1420 250">
  <path fill="#fff" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,128C672,149,768,171,864,192C960,213,1056,235,1152,240C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <svg class="second-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 -10 1420 330">
  <path fill="#a2b2db" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,128C672,149,768,171,864,192C960,213,1056,235,1152,240C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <svg class="third-line" xmlns="http://www.w3.org/2000/svg" viewBox="-700 -10 1420 330">
  <path fill="#8aa4e6" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,128C672,149,768,171,864,192C960,213,1056,235,1152,240C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>

  <div class="space-ship">
    <div class="head"></div>
    <div class="base"></div>
    <div class="hole"></div>
    <div class="left-wing"></div>
    <div class="right-wing"></div>
  </div>
<style scoped>

.space-ship{
  
  height: 150px;
  width: 120px;
  position: absolute;
  right: 25px;
  bottom: -55px;
  transform: translate(-50%, -50%);
  z-index: 4;
}
.head{
  position: inherit;
  bottom: 70px;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 50px;
  width: 60px;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-bottom: 50px solid white;

}
.base{
  position: inherit;
  bottom: -20px;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 80px;
  width: 57px;
  background-color: white;
}
.hole{
  position: inherit;
  bottom: 30%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: #8aa4e6;
}

.left-wing{
  position: inherit;
  bottom: 10px;
  left: 0;
  transform: translate(-50%, -50%);
  height: 28px;
  width: 28px;
  background-color: white;
  transform:  skew(-5deg, -25deg);

}
.right-wing{
  position: inherit;
  bottom: 10px;
  right: 0;
  transform: translate(-50%, -50%);
  height: 28px;
  width: 28px;
  background-color: white;
  transform:  skew(5deg, 25deg);

}

.circle-one{
  width: 300px;
  height: 300px;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translate(-50%,-50%);
  border-radius: 50%;
  background-color: white;
}
.circle-two{
  width: 150px;
  height: 150px;
  position: absolute;
  top: 50%;
  left: 85%;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  background-color: white;
}
.first-line{
  position: absolute;
  bottom: 0px;
  left: 0;
  transform: translate(-50% -50%);
  z-index: 3;
}
.second-line{
  position: absolute;
  bottom: 0px;
  left: 0;
  transform: translate(-50%, -50%);
  transform: rotate(0deg);
  z-index: 2;
}
.third-line{
  position: absolute;
  bottom: 0px;
  left: 0;
  transform: translate(-50%, -50%);
  transform: rotate(0deg);
  z-index: 1;
}

</style>