@extends('layout')
@section('main')
    <!-- main -->
    <main class="container">
        <section id="contact-us">
            <h1>İletişim için yazınız</h1>

            <!-- contact info -->
            <div class="container">
                <div class="contact-info">
                    <div class="specific-info">
                        <i class="fas fa-home"></i>
                        <div>
                            <p class="title">Fırat Üniversitesi, Merkez</p>
                            <p class="subtitle">Elazığ Türkiye</p>
                        </div>
                    </div>
                    <div class="specific-info">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <a href="">+905 374 XXX XXX  </a>
                            <br />
                            <a href="">+905 864 XXX XXX  </a>

                            <p class="subtitle">Pazartesi - Cuma  ÖÖ:9 - ÖS:6</p>
                        </div>
                    </div>
                    <div class="specific-info">
                        <i class="fas fa-envelope-open-text"></i>
                        <div>
                            <a href="mailto:info@seima.co.ke">
                                <p class="title">info@seima.co.ke</p>
                            </a>
                            <p class="subtitle">Düşüncelerinizi istediğiniz zaman bizimle paylaşın!</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <form action="" method="">
                        <!-- Name -->
                        <label for="name"><span>İsim</span></label>
                        <input type="text" id="name" name="name" value="" />

                        <!-- Email -->
                        <label for="email"><span>Email</span></label>
                        <input type="text" id="email" name="email" value="" />

                        <!-- Subject -->
                        <label for="subject"><span>Konu</span></label>
                        <input type="text" id="Subject" name="subject" value="" />

                        <!-- Message -->
                        <label for="message"><span>Mesaj</span></label>
                        <textarea id="message" name="message"></textarea>

                        <!-- Button -->
                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
