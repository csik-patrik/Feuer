# Bevezető
A moodle rendszer célja, hogy a diákok és tanárok számára megkönnyítse a mindennapi munkát. Legfőbb felhasználási körébe tartoznak a tananyagok, tesztek, dolgozatok, feladatok kiírása a diákok számára, illetve a tanuláshoz szükséges fileok megosztása. Az egyes tantárgyakat kurzusoknak, a különböző témaköröket moduloknak nevezzük, mellyekhez hozzáférést biztosíthatunk az ahhoz jogosult diákok számára. Használatának előnye még a rendezettség, azonnal visszajelzés tesztek esetén, átlátható tantervkövetés.

# A rendszer célja
A cél egy PHP Laravel segítségével létrehozott backend-frontend és MySQL adatbázissal összekötött webes rendszer. Az oldal adminisztrátorokkal, tanárokkal és diákokkal fog rendelkezni. Az adminisztrátorok hozzáadhatnak az adatbázishoz új kurzusokat, tanárokat és diákokat. Ezen kívűl az adatbázisban tárolt adatokat módosíthatják és törölhetik. Főoldalunkon a felhasználók kiválaszthatják a számukra szükséges menüpontokat, úgy mint kurzusok, elért pontszámok, illetve profilbeállítások. Az adminisztrátorok és tanárok saját fiókot hozhatnak létre, mely szükséges lesz a kurzusok, valamint a felhasználók menedzseléséhez. Sikeres regisztrációról visszaigazoló emailt kapnak. A kurzusok kategóriák szerint vannak rendezve, a kurzuskód alapján lehetőség van keresésre is. Regisztráció nélkül azonban ezek nem megtekinthetőek. A felhasználókról nevüket, lakcímüket, email címüket, jelszavukat opcionálisan képet tárolunk, ezeknek megváltoztatására lehetőségük lesz a profil zerkesztése menüpont alatt.

# Projekt terv
A projekt nem más, mint egy webes e-learning moodle rendszer létrehozása. A projekt elkészítéséhez PHP Laravel-t használunk backend-nek és frontend-nek egyaránt. Adatbázishoz pedig MySQL-t használunk. A projekt elkészítésére rendelkezésre áll egy csapat, amely 4 főből áll. A csapat feladata a webes felület időben való elkészítése és annak egy megadott időpontban történő bemutatása. A csapatból mindenki felelősséggel tartozik azért, hogy a projekt időben elkészüljön és hogy az általuk elvállalt feladatok, melyek az oldal működését biztosítják jól, megfelelően működjenek. A projekt menedzserek leellenőrzik a tagok által elkészített feladatokat, hogy azok tényleg ellátják-e a funkcióikat, ha nem, akkor annak a csapattagnak a figyelmét felhívják arra, hogy nem az elvárt módon működik az adott feladat. Ezen kívül még tanáccsal látják el a tagokat, valamint újabb feladatokat adnak ki.

## Mérföldkövek:
- Követelmény specifikáció elkészítése
- Funkcionális specifikáció elkészítése
- UML ábrák elkészítése
- Rendszerterv elkészítése
- Felhasználók létrehozása
- Felhasználói adatok megjelenítése
- Felhasználó adatok szerkesztése
- Főoldal tartalmának elkészítése
- Kurzus adatainak megjelenítése
- Kurzus keresési lehetőség megadása
- Profiladatok szerkesztésének lehetősége
- Tesztelés

# Üzleti folyamatok modellje
A projekt egy e-learning platform webes felülettel, ami a megrendelő igényeinek megfelelően fog elkészülni. A rendszer létrehozásánál a PHP Laravel-t használjuk backend és frontend részen egyaránt. Adatbázisnál a MySQL-t használjuk. Az e-learning rendszernek rendelkeznie kell egy regisztrációs és egy bejelentkezési felülettettel. Itt a felhasználók adataik megadásával tudnak regisztrálni, ezt követően kapnak egy visszaigazoló emailt a regisztrációról. Mindezek után tudnak csak bejelentkezni. A felhasználók három csoportba tartozhatnak: adminisztrátorok, tanárok és diákok. Az adminisztrátorok kezelik a tanárokat, diákokat, illetve a kurzusokat. Újabb felhasználókat vesznek fel, vagy esetleg törölnek. Kurzusok esetén pedig újakat vesznek fel, meglévőeknél az adatokat módosítják, illetve törölhetik is ezeket. A tanárok csak a kurzusokhoz férnek hozzá, amikből felvihetnek az adatbázisba újakat, módosíthatnak egy meglévőt, vagy ki is törölhetik (természetesen az utóbbi két esetben csak a saját maguk által létrehozottakat). Ezen kívül a diákokat hozzáadhatják az általuk létrehozott kurzusokhoz, illetve eltávolíthatják őket. A diákok megtekinthetik azokat a kurzusokat, amelynek tagjai, azokban teszteket tölthetnek ki, melyeknek eredményét azonnal láthatják. Mindezek alapján a cél egy olyan felület létrehozása, amelyet bárhol, bármikor bárki el tud érni. Ehhez tulajdonképpen internet kapcsolat szükséges és mivel manapság egyre több eszközön lehet netezni, ezért fontos az is, hogy minden eszközön megfelelően jelenjen meg és jól működjön.

# Követelmények

## Funkcionális követelmények
A felhasználóknak a regisztráció gombra kattintva lehetőségük lesz saját adataik megadásával regisztrálni oldalunkra, melynek sikerességéről visszaigazoló email-t kapnak. Bejelentkezés gombra kattintva felhasználónév és jelszó megadását követően bejelentkezhetnek a weboldalra. Profiljukra kattintva megjelennek személyes adataik és profilképük, melyeket meg tudnak változtatni az profil szerkesztése opciót választva. Jelszavukat csak email-en keresztül tudják megváltoztatni. A főoldalon a kurzusok listája jelenik meg csoportosítva. Keresés funkcióban a könyveket listázhatja a felhasználó cím, különböző kategóriák szerint csoportosítva. A diákoknak lehetőségük van megtekinteni a kívánt kurzust, valamint az azokban elérhető tananyagokat, illetve tudásuk ellenőrzése érdekében tölthetnek ki teszteket is, ha erre lehetőséget biztosított korábban a kurzust létrehozó tanár.

## Nem funkcionális követelmények

A weboldal több eszközön is elérhető lesz különböző böngészőkön keresztül. Könnyen átlátható, modern felépítésű felhasználói felülettel. Naprakész információkkal, a leírt funkcókat ellátva, valamint mind a felhasználók, mind az oldal adminisztrátorainak könnyű kezelhetőséget biztosítva.

# Funckionális terv

## Rendszerszereplők
A rendszerünkben három rendszerszerszereplő csoportot különbözetünk meg, Az egyik a regisztrációval rendelkező adminisztrátorok. A másik a regisztrációval rendelkező tanárok. A harmadik pedig a regisztrációval rendelkező diákok csoportja. Az adminisztrátorok hozzáférhetnek a felhasználók listájához, lehetőségük van rendszerüzenetet küldeni a felhasználók részére hiba esetén. A regisztrációval rendelkező felhasználók (tanárok és diákok) pedig hozzáférhetnek saját kurzusukhoz, illetve módosíthatják a profiladataikat.

## Rendszerhasználati esetek

### Felhasználók csoportja
- Adminisztrátor
- Tanár
- Diák

### Adminisztrátor:
![Image of admin activity](/Documents/Diagrams/Admin_Activity_UML.png)

### Tanár:
![Image of teacher activity](/Documents/Diagrams/Teacher_Activity_UML.png)

### Diák:
![Image of student activity](/Documents/Diagrams/Student_Activity_UML.png)

### A rendszernek a következő funkciókat kell ellátnia:

- az adminisztrátorok tudjanak új kurzusokat hozzáadni, módosítani és törölni
- az adminisztrátorok tudjanak felhasználó adatokat módosítani
- a tanárok tudjanak új kurzusokat hozzáadni, sajátjukat módosítani és törölni
- a tanárok tudjanak a kurzusokon belül keresni
- a tanárok tudjanak személyes adatokat változtatni ( e-mail, jelszó, profilkép, stb. )
- a diákok tudjanak a kurzusok között keresni
- a diákok tudjanak kurzusokat megtekinteni, ha van hozzáférésük az adott kurzusokhoz

### Előfeltételek:

- adminisztrátorok részére a rendszer használatához jogosultság, azaz jelszó szükséges (az adminisztrátorok profilját a projektfelelősök adják hozzá az adatbázishoz)
- a tanároknak és diákoknak regisztráció szükséges a funkciók használatához

### Használati esetek (use case) ábrája:
- TODO

## Menühierarchiák
A menürendszert egy navigációs sávban építetjük fel, a navigációs sáv alatt pedig a kiválasztott funckió/oldal jelenik meg.

A rendszerbe való bejelentkezés előtt egy Belépés valamint Új fiók létrehozása gombok találhatók a navigációs sávban. További menüpontok és funckiók csak belépés után jelennek meg a felhasználók számára.

**Bármilyen felhasználóként** regisztrációval nem rendelkező vendég felhasználó számára csak a bejelentkező felület elérhető.

**Adminisztrátorként** belépve a rendszerbe a Kezdőlap, Felhasználók, Kurzusok, Kilépés menüpontok találhatók a navigációs sávban. A felhasználók menüpontra kattintva a következők érhetők el: felhasználók listázása, új felhasználó hozzáadása, módosítása és törlése, azaz adminisztritatív funkciók a felhasználókkal kapcsolatban.
A kurzusok menüpont tartalmazza az összes kurzust, amit az adminisztrátorok módosíthatnak, törölhetnek, illetve új kurzusokat is vehetnek fel.
A Kilépés gombra kattintva értelemszerűen kijelentkezik a rendszerből az adminisztrátor.

**Tanárként** belépve a rendszerbe a Kezdőlap, Kurzusok, Profil, Kilépés menüpontok jelennek meg a navigációs sávban. A kurzusok menüpont megegyezik az adminisztrátoroknál leírt tulajdonságokkal, annyi különbséggel, hogy a tanárok csak a saját maguk által létrehozott kurzusokat módosíthatják vagy törölhetik. Lehetőségük van kurzuson belül akár tesztek létrehozására is a tananyagok mellett. A profil gombra kattintva megtekinthetik, valamint módosíthatják profiladataikat. Kilépés gombra kattintva pedig kijelentkezik.

**Diákként** belépve a rendszerbe a Kezdőlap, Kurzusok, Profil, Kilépés menüpontok jelennek meg a navigációs sávban. A kurzusok menüpont alatt megtalálják a diákok azokat a kurzusokat, melynek tagjai, azaz hozzáférésük van hozzá. A kezdőlapon pedig kereshetnek további kurzusokat és hozzáférést kérhetnek az adott kurzust létrehozó személytől. A profil gombra kattintva megtekinthetik és módosíthatják profiladataikat. Kilépés gombra kattintva pedig kijelentkezhetnek a rendszerből.
	
# Fizikai környezet
![Image of physical environment](/Documents/Diagrams/Physical_Environment.png)

A projekt egy e-learning webes felület létrehozása, online tanulhatnak a diákok, előrehaladásukat nyomon lehet követni. Az emberek bárhol, bármikor el tudják ezt a felületet érni. Ehhez csupán internet kapcsolatra és megfelelő eszközre van szükségük. A projekt elkészítésénél mind a backend, mind a frontend-et is leprogramozzuk. A megvalósítás során a backend és a frontend is PHP Laravel keretrendszert fogjuk használni. Az adatbázis pedig MySQL lesz. Fejlesztői környezetként a Visual Studio Code-ot használjul. Mivel manapság az emberek nem a PC-ket részesítik előnyben, hanem általában mobiltelefonokat, tableteket stb., ezért ügyelnünk kell rá, hogy megfelelően jelenjen meg a weboldal a lehető legtöbb eszközön. Ez a gyakorlatban azt jelenti, hogy az oldalnak reszponzívnak kell lennie. Ezt a trendet a készítés során figyelembe vesszük és ennek megfelelően készítjük el a felületet.

# Adatbázis terv
![Image of database plan](/Documents/Diagrams/Database_Plan_EER.png)

A felhasználók és egyéb adatokat, mint például a kurzusok adatait MySQL-ben tároljuk, mely egy ingyenes, nyílt forráskódú adatbázis. A kurzusokról tároljuk azok kódját, nevét, kategóriáját, tulajdonosát, valamint a kurzuhoz tartozó tagokat (hozzáféréssel rendelkező diákok listáját). A felhasználókról a felhasználónevüket, jelszavukat hash-elt formában, email címüket, nevüket, valamint telefonszámukat.

# Tesztterv
A rendszerterv szerint implementált szoftver tesztelésének célja, hogy ellenőrizze az üzleti folyamatok modellje című pontban meghatározott helyes, specifikáció szerinti lefutását, valamint hogy a kliens webes felület felhasználóbarát módon és reszponzívan jelenik meg valamennyi eszközön, és használható különböző hardver és szoftverkörnyezetben.

A tesztelés során használt kiszolgáló hardver koonfigurációja a telepítés során használt hardverrel kompatibilis, teljesítményben (processzor, operatív memória, háttértár) nem tér el jelentősen. Telepítéskor igény szerint biztosítunk ehhez szükséges hardvert is.

A tesztelés során a használt hardverek a napjainkban elterjedt hardverkonfigurációjú PC-k illetve laptopok, melyeken a leggyakrabban használt böngészőkön (Google Chrome, Mozzila Firefox, Microsoft Edge) teszteljük a rendszert az alábbiakban részletezettek szerint. 

**A minimum hardverkonfiguráció:**
#### A futtatáshoz: 
- Processzor: minimum 1 GHz - 2 GHz dual core vagy ennél jobb.
- Memória: minimum 512MB - 1GB, vagy nagyobb forgalmú oldal esetében több ajánlott.
- Tárhely: 200 MB, valamint a tárolni kívánt adatok mennyiségétől függően ettől több.

#### A weboldal megtekintéséhez:
- Egy böngészőt futtatni képes PC, mobiltelefon, vagy tablet

A tesztelés során az üzleti folyamatokhoz tartozó különböző forgatókönyvek eredményét vizsgáljuk. Amennyiben az elvártnak megfelelő eredményt kapjuk, a teszteset sikeresnek tekinthető, ellentkező esetben a hibát rögzítjük a tesztjegyzőkönyvben. Ezt követően a feljegyzett hibákat javítjuk a szoftverben, és újbóli tesztelésnek vetjük alá a rendszert.

A rendszer alábbiakban leírt tesztelésének előfeltétele, hogy az adatbázisban phpMyAdmin segítségével felvegyünk egy első adminisztrátori jogosultsággal rendelkező felhasználót a felhasználók táblába. Felhasználónév: admin, a további adatok a fejlesztő-tesztelő személyes adatai lesznek. Ezzel belépve tudjuk tesztelni az adminisztrátori jogosultsággal rendelkező felhasználók kivételes funkcióit.