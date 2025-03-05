<!DOCTYPE html>
<html lang="hu">
<?php include("./application/view/header.php"); ?>

    <?php include("./application/view/navbar/navbar.php"); ?>

    <div class="containerKep1">
        <img src="./assets/img/slide1.jpg" alt="">
    </div>

    <div class="containerSzoveg1">
    <p>A HambiBambi Étteremben a minőség és az ízélmény találkozik! Kézzel válogatott alapanyagokból, friss és zamatos hozzávalókból készítjük fogásainkat, hogy vendégeink minden falattal egy kulináris élményt élhessenek át. Legyen szó szaftos burgerekről, ropogós sültkrumpliról vagy egy frissítő salátáról, nálunk minden étel szeretettel készül.</p>
</div>

<div class="containerSzoveg2">
    <p>Ételeinket úgy álmodtuk meg, hogy mindenki megtalálja a kedvencét: a klasszikus ízek kedvelői és a különleges gasztronómiai élményeket keresők egyaránt. A zamatos húsoktól kezdve a vegetáriánus finomságokon át a házi készítésű szószokig minden fogásunk az autentikus ízeket és a modern gasztronómiai trendeket ötvözi. Gyere és tapasztald meg a HambiBambi élményt!</p>
</div>

    <div class="containerKep2">
    <img src="./assets/img/slide3.jpg" alt="">
    </div>

    <section class="kiemelt-ajanlatok">
        <h2>Kiemelt ajánlataink</h2>
        <div class="ajanlatok">
            
                <div class="ajanlat">
                  <?php require "./application/view/product.html";?></p>
                </div>
        </div>
    </section>
    <main>
        <div class="bemutatkozas">
            <h2>Rólunk</h2>
            <div class="bemutatkozoDiv">
            <p>Üdvözlünk a HambiBambi Étteremben! Büszkék vagyunk arra, hogy mindig friss alapanyagokból készítjük ételeinket. Legyen szó egy finom hamburger menüről, 
                könnyű salátákról vagy finom levesről, nálunk mindenki megtalálja a kedvencét. Látogass el hozzánk és tapasztald meg a minőséget és a vendégszeretetet!</p>
            </div>
            </div>
    </main>

    <?php include("./application/view/footer.php")?>