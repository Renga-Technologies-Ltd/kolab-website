<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Successful</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        div {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4CAF50;
        }

        p {
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h2>Subscription Successful!</h2>
        <p>Thank you for subscribing to our newsletter. We appreciate your interest.</p>
    </div>

</body>
</html>
















<div class="card">
  <img src="././assets/img/network management.jpg" viewBox="0 0 24 24"class="card__image">
  <div class="card__content">
    <p class="card__title"> Network Infrastructure Management</p>
    <p class="card__description">Ensure seamless connectivity and optimal performance with our network infrastructure management services. We design, implement, and maintain robust network solutions tailored to your business requirements. From hardware setup to ongoing monitoring, we've got your network covered.</p>
  </div>
</div>
<div class="card">
  <img src="././assets/img/123.png" viewBox="0 0 24 24"class="card__image">
  <div class="card__content">
    <p class="card__title"> Cybersecurity Solutions</p>
    <p class="card__description">Safeguard your digital ./assets with our advanced cybersecurity solutions. Our experts assess vulnerabilities, implement robust security protocols, and provide ongoing monitoring to protect your business from evolving cyber threats. Trust us to keep your data secure and compliant.</p>
  </div>
</div>
<div class="card">
  <img src="././assets/img/123.png" viewBox="0 0 24 24"class="card__image">
  <div class="card__content">
    <p class="card__title"> Custom Software Development</p>
    <p class="card__description">Safeguard your digital ./assets with our advanced cybersecurity solutions. Our experts assess vulnerabilities, implement robust security protocols, and provide ongoing monitoring to protect your business from evolving cyber threats. Trust us to keep your data secure and compliant.</p>
  </div>
</div>
<style>
    .card {
  position: relative;
  width: 400px;
  height: 280px;
  left: 10%;
  display: flex;
  margin: auto;
  margin-top: 5%;
  background-color: #f2f2f2;
  border-radius: 10px;
  flex: wrap;
  align-items: center;
  justify-content: space-between;
  overflow: hidden;
  perspective: 1000px;
  box-shadow: 0 0 0 5px #ffffff80;
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card__image {
      width: 100%;
      height: auto
}
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover .card__content {
  transform: rotateX(0deg);
}

.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}

.card:hover svg {
  scale: 0;
}

.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}

</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .cards-container {
      display: flex;
      justify-content: space-between; /* You can use other values like space-around or space-evenly if needed */
    }

    .card {
      width: 400px;
      height: 280;
      margin: auto;
      margin-top: 5%;
      background-color: #f2f2f2;
      border-radius: 10px;
      justify-content: space-between;
      flex: wrap;
      overflow: hidden;
      perspective: 1000px;
      box-shadow: 0 0 0 5px #ffffff80;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    
    }

    .card__image {
      width: 100%;
      height: auto;
    }
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}
.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
    .card__content {
      padding: 15px;
    }
    .card:hover .card__content {
  transform: rotateX(0deg);
}
.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}
.card:hover svg {
  scale: 0;
}
.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}
  </style>
</head>
<body>

<div class="cards-container">
  <div class="card">
    <img src="././assets/img/network management.jpg" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Network Infrastructure Management</p>
      <p class="card__description">Ensure seamless connectivity and optimal performance with our network infrastructure management services. We design, implement, and maintain robust network solutions tailored to your business requirements. From hardware setup to ongoing monitoring, we've got your network covered.</p>
    </div>
  </div>

  <div class="card">
    <img src="././assets/img/123.png" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Cybersecurity Solutions</p>
      <p class="card__description">Safeguard your digital ./assets with our advanced cybersecurity solutions. Our experts assess vulnerabilities, implement robust security protocols, and provide ongoing monitoring to protect your business from evolving cyber threats. Trust us to keep your data secure and compliant.</p>
    </div>
  </div>

  <div class="card">
    <img src="././assets/img/123.png" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Custom Software Development</p>
      <p class="card__description">Safeguard your digital ./assets with our advanced cybersecurity solutions. Our experts assess vulnerabilities, implement robust security protocols, and provide ongoing monitoring to protect your business from evolving cyber threats. Trust us to keep your data secure and compliant.</p>
    </div>
  </div>
</div>

</body>