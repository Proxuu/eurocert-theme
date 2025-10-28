<?php
get_header();
?> 


    <section class="hero-section">
            <div class="decorative-bg">
                <div class="dot" style="width: 8px; height: 8px; top: 10%; left: 5%; transform: rotate(0deg); opacity: 0.2;"></div>
                <div class="dot" style="width: 12px; height: 12px; top: 17%; left: 16%; transform: rotate(30deg); opacity: 0.3;"></div>
                <div class="dot" style="width: 16px; height: 16px; top: 24%; left: 27%; transform: rotate(60deg); opacity: 0.4;"></div>
                <div class="dot" style="width: 20px; height: 20px; top: 31%; left: 38%; transform: rotate(90deg); opacity: 0.5;"></div>
                <div class="dot" style="width: 24px; height: 24px; top: 38%; left: 49%; transform: rotate(120deg); opacity: 0.2;"></div>
                <div class="dot" style="width: 8px; height: 8px; top: 45%; left: 60%; transform: rotate(150deg); opacity: 0.3;"></div>
                <div class="dot" style="width: 12px; height: 12px; top: 52%; left: 71%; transform: rotate(180deg); opacity: 0.4;"></div>
                <div class="dot" style="width: 16px; height: 16px; top: 59%; left: 82%; transform: rotate(210deg); opacity: 0.5;"></div>
                <div class="dot" style="width: 20px; height: 20px; top: 66%; left: 93%; transform: rotate(240deg); opacity: 0.2;"></div>
                <div class="dot" style="width: 24px; height: 24px; top: 73%; left: 14%; transform: rotate(270deg); opacity: 0.3;"></div>
                <div class="dot" style="width: 8px; height: 8px; top: 80%; left: 25%; transform: rotate(300deg); opacity: 0.4;"></div>
                <div class="dot" style="width: 12px; height: 12px; top: 87%; left: 36%; transform: rotate(330deg); opacity: 0.5;"></div>
                <div class="dot" style="width: 16px; height: 16px; top: 14%; left: 47%; transform: rotate(360deg); opacity: 0.2;"></div>
                <div class="dot" style="width: 20px; height: 20px; top: 21%; left: 58%; transform: rotate(390deg); opacity: 0.3;"></div>
                <div class="dot" style="width: 24px; height: 24px; top: 28%; left: 69%; transform: rotate(420deg); opacity: 0.4;"></div>
            </div>
            <div class="container">
                
                <div class="hero-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/hero-bg.png');">




                    <div class="hero-content d-none d-md-flex">
                        <div class="hero-text">
                            <p class="hero-badge">BEZPIECZNE ROZWIĄZANIA CYFROWE</p>
                            <h1 class="hero-title">Kwalifikowana <br>pieczęć elektroniczna</h1>
                            <p class="hero-description">Zabezpiecz swoje dokumenty firmowe profesjonalną pieczęcią elektroniczną zgodną z eIDAS.</p>
                            <div class="hero-buttons">
                                <button class="btn fr-btn-primary">WYBIERZ PIECZĘĆ →</button>
                                <button class="btn fr-btn-secondary">DOWIEDZ SIĘ WIĘCEJ</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="hero-mobile d-md-none">
                        <div class="hero-text-mobile">
                            <p class="hero-badge">PRODUKT</p>
                            <h1 class="hero-title-mobile">Kwalifikowany<br>podpis elektroniczny</h1>
                            <p class="hero-description-mobile">Podpisuj elektronicznie dokumenty PDF, XML i inne w formacie XAdES i PAdES.</p>
                            <div class="hero-buttons-mobile">
                                <button class="btn fr-btn-primary">SPRAWDŹ WARIANTY →</button>
                                <button class="btn fr-btn-secondary">PORÓWNAJ FUNKCJONALNOŚCI</button>
                            </div>
                            <div class="hero-features-mobile">
                                <div class="feature-item">
                                    <svg class="check-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path></svg>
                                    <span>Moc prawna podpisu własnoręcznego w całej UE</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="check-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path></svg>
                                    <span>Ponad 100 000+ certyfikatów wydanych</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="check-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path></svg>
                                    <span>Wsparcie 24/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-image-mobile d-md-none">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/img/hero-bg2.png" alt="EuroCert Mobile App">
                    </div>
                    <div class="hero-image-desktop d-none d-md-block">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/img/hero-bg2.png" alt="EuroCert Mobile App">
                    </div>
                </div>
            </div>
        </section>


<?php
get_footer();
?>