<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>İnsan Kaynakları Formu</title>
    </head>
    <body>
        <header class="kutu">
            <h1>İnsan Kaynakları Formu</h1>
        </header>
        <main>
            <section class="kutu">
                <p>Aşağıdaki iletişim bilgilerini girin ve sonra bu bilgileri gönderin.</p>

                <form action="sent.php" autocomplete="on">
                    <fieldset>
                        <legend>Kişisel bilgiler:</legend>
                        <label>Adınız: </label><input type="text" name="isim" size="20" maxlength="50" placeholder="max. 50" required><br>
                        <label>Soyadınız: </label><input type="text" name="soyisim" size="20" maxlength="50" placeholder="max. 50" required><br><br>
                        <label>Yaşınız: </label><input type="number" name="yas" max="120" min="0" placeholder="0-120" required><br>
                        <label>Doğum tarihiniz: </label><input type="date" name="dogum" required><br><br>
                        <label>E-posta adresiniz: </label><input type="email" name="eposta" size="20" maxlength="100" placeholder="max. 100" required><br>
                        <label>Telefon numaranız: </label><input type="tel" name="telno" placeholder="123-456-78-90" required><br>
                    </fieldset>
                    <fieldset>
                        <legend>Diğer bilgiler:</legend>
                        <label>Eğitim durumu: </label>
                        <select name="egitimdurumu">
                            <option value="egitim0">Belirtilmedi</option>
                            <option value="egitim1">İlköğretim</option>
                            <option value="egitim2">Ortaöğretim</option>
                            <option value="egitim3">Lise</option>
                            <option value="egitim4">Üniversite</option>
                            <option value="egitim5">Yüksek Lisans</option>
                            <option value="egitim6">Doktora</option>
                        </select><br><br>
                        <label>Askerlik durumu: </label><br>
                        <input type="radio" name="askerlikdurumu" value="yapti">Yaptı
                        <input type="radio" name="askerlikdurumu" value="yapmadi">Yapmadı
                        <input type="radio" name="askerlikdurumu" value="tecilli">Tecilli
                        <br><br>
                        <label>Hobiler: </label><br>
                        <input type="checkbox" name="hobi1" value="true">Kitap okumak<br>
                        <input type="checkbox" name="hobi2" value="true">Resim çizmek<br>
                        <input type="checkbox" name="hobi3" value="true">Müzik dinlemek<br>
                        <input type="checkbox" name="hobi4" value="true">Dışarı çıkmak<br>
                    </fieldset>
                    <input type="submit" value="Formu gönder">
                </form>
            </section>
        </main>
    </body>
</html>