<!doctype html>

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lumen Mini Projekt</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav id="nav">
        <div class="container">
            <input type="checkbox" id="nav-show-menu" />
            <span class="nav-hamburger"><label for="nav-show-menu"></label></span>
            <a href="#offer"><span class="nav-el-bg"></span><span>oferta</span></a>
            <a href="#gallery"><span class="nav-el-bg"></span><span>galeria</span></a>
            <a href="#about-us"><span class="nav-el-bg"></span><span>o nas</span></a>
            <a href="#contact"><span class="nav-el-bg"></span><span>kontakt</span></a>
            <a href="#weather"><span class="nav-el-bg"></span><span>pogoda</span></a>
        </div>
    </nav>
    
    <section id="offer">
        <div class="container">
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
            <div class="card">
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class="card-desc">Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
            </div>
        </div>
    </section>
    
    <section id="gallery">
        <div class="container">
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <img src="/img/bgimg2.jpg" />
                <div class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
    </section>
    
    <section id="about-us">
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque suscipit diam vel faucibus. Vestibulum auctor vitae metus quis finibus. Donec viverra maximus dictum. Phasellus convallis, est a laoreet ullamcorper, nibh nisi suscipit ipsum, vel facilisis diam erat eu lorem. Mauris non varius lectus. Maecenas magna dui, sodales eget hendrerit id, feugiat nec massa. Fusce dapibus nec lectus quis volutpat. Aliquam erat volutpat. Morbi ullamcorper nisl non auctor vulputate. Cras ac nisi sed nibh condimentum varius. </p>
            <p>Mauris congue nulla ac mauris eleifend, congue pulvinar orci consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam sagittis dictum placerat. Maecenas tempor molestie nisl, at volutpat mauris faucibus sit amet. Fusce consectetur risus dolor, ut condimentum dui consectetur vitae. Suspendisse potenti. Mauris eu rutrum nulla. Curabitur felis libero, dapibus non blandit et, faucibus id nisi. Vivamus at dui vitae dui maximus sagittis. Vestibulum egestas porttitor elit ut luctus. </p>
        </div>
    </section>
    
    <section id="contact">
        <div class="container">
            <form action="#" id="contact-form" method="post" data-action="/contact" onsubmit="return false;">
                <div>
                    <input type="text" placeholder="Imię, Nazwisko / Firma" name="name">
                    <input type="text" placeholder="Numer telefonu" name="phone">
                    <input type="text" placeholder="Temat" name="topic">
                    <input type="text" placeholder="Twój e-mail" name="email">
                </div>

                <div>
                    <textarea rows="5" cols="40" placeholder="Treść wiadomości" name="message"></textarea>
                </div>

                <div>
                    <button type="submit" name="submit">Wyślij</button>
                </div>

                <div class="form-errors">
                </div>

                <div class="form-messages">
                </div>
                
                <div class="thinker"><span></span></div>
            </form>
        </div>
    </section>
    
    <section id="weather">
        <div class="container">
            <div><input id="weather-input" type="text" placeholder="Miasto" name="city"></div>
            <div id="weather-msg">Wprowadź miasto, aby wyświetlić temperaturę.</div>
        </div>
    </section>
    
    <footer id="footer">
        <div class="container">
            <span>Copyright © 2025 All Rights Reserved </span>
        </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/scripts.js"></script>
</body>
</html>