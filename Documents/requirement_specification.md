# Tüzes Moodle: Követelmény specifikáció

## Írta: Csik Patrik

# Bevezető:

A Moodle rendszer célja, hogy a diákok és tanárok számára megkönnyítse a mindennapi munkát.
Legfőbb felhasználási körbe tartoznak a tananyagok, tesztek, dolgozatok, feladatok kiírása a diákok számára, illetve a tanuláshoz szükséges fájl-ok megosztása.
Az egyes tantárgyakat kurzusoknak, a különböző témaköröket moduloknak nevezzük, melyekhez hozzáférést biztosíthatunk a jogosult felhasználók számára.
Használatának előnye még a rendezettség, azonnali visszajelzés tesztek esetén, átlátható tantervkövetés.

# Jelenlegi helyzet leírása:

A Moodle egy igen elterjedt, nagy népszerűségnek örvendő tanulást segítő felület. Népszerűségének egyik oka az egyszerű kezelhetősége. A Moodle ugyanis egyszerre alkalmas a tartalom tárolására, szerkesztésére, összeállítására, a diákok „kezelésére”, az egyes diákok haladásának, tevékenységének nyomon követésére, munkájuk értékelésére, úgy, hogy mindeközben a klasszikus tanulási folyamat részleteit virtuálisan is megjeleníti, tehát osztályok vannak, házi feladatok adhatók, a résztvevők kommunikálhatnak.

# Vágyálom rendszer leírása:

Célunk egy Moodle rendszer fejlesztése amely a PHP Laravel keretrendszer segítségével készül. A program egy MySQL adatbázishoz csatlakozik amiből adatokat kér le, módosít és töröl. Három szerepkört különböztetünk meg: adminisztrátor, tanár és diák. Az adminisztrátorok hozzáadhatnak az adatbázishoz új kurzusokat, diákok és tanárkat. Ezenkívűl az adatbázisban tárolt adatokat módosíthatják és törölhetik.
A tanárok szerepköre lefedi a kurzusok, modulok létrehozását és karbantartását, diákokat rendelhetnek kurzusaikhoz, illetve adatokat tölthetnek fel, módosíthatnak és törölhetnek, olyan területeken ahová hozzáférésük engedélyezett. (PL: kurzusok, modulok)
A diákok megtekinthetik a hozzájuk rendelt kurzusokat, tananyagokat és modulokat.
Kitölthetnek teszteket, fájl-okat tölthetnek fel. Hogy a diák számára mi elérhető az adminisztrátorok és a tanárok határozzák meg.

Az adatbázisban tárolt adatok a felhasználókról:

- Felhasználó azonosító
- Jelszó (Titkosítva)
- Feladatkör egyedi azonosító
- Emailcím
- Keresztnév
- Középső név
- Utónév
- Telefonszám

Az adatbázisban tárolt adatok a kurzusokról:

- Kurzus azonosító
- Kurzuskód
- Kurzusnév
- Kategória
- Kurzus tulajdonos

# A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások leírása:

A felhasználó által megadott személyes adatok bizalmasan lesznek kezelve, nem lesznek át adva harmadik félnek. Ezekkel az adatokat az adminisztrátorok és a weblap készítői nem tudják felhasználni saját céljaikra. A felhasználó által nyújtott bizalommal nem fognak vissza élni. Sohasem fog kapni a felhasználó olyan email-t, amiben kérik őt arra, hogy a jelszavát adja meg. Az oldalon mindig az aktuális, friss információk lesznek megjelenítve. A felhasználó megfelelően lesz tájékoztatva, azaz az oldalon az összes olyan információ fenn lesz, amelyre szüksége van. A rendszerhez csak az intézmény dolgozói és diákjai férhetnek hozzá egyéni azonosítóval.

# Jelenlegi üzleti folyamatok modellje:

Az Eszterházy Károly Katolikus Egyetemen jelenleg nem elérhető hasonló rendszer, ezen üzleti hiány kitöltésére készül a project.
(Ez egy fiktív feladat az AFP2 tantáryghoz, jelelneg is elérhető az EKE moodle rendszere, ez a project a másolata.)

# Igényelt üzleti folyamatok modellje:

Moodle rendszerünk három szerepkört különböztet meg: adminisztrátor, tanár és diák.
Alkalmazásunk a követelmény listában feltüntetett funkcionális és nem funkcionális követelményeknek megfelelően fog elkészülni. Az adminisztrátoroknak és tanároknak biztosítunk egy regisztrációs felületet, a diákokat az intézménybe való jelentkezésük és személyes adataik felhasználásával visszük fel a rendszerbe. A felhasználókat szerepkörük alapján csoportosítjuk.

Adminisztrátorok jogai:

- Diákok listázása
- Új diák hozzáadása
- Regisztrált diák adatainak módosítása
- Regisztrált diák törlése
- Tanárok listázása
- Új tanár hozzáadása
- Regisztrált tanár adatainak módosítása
- Regisztrált tanár törlése
- Kurzusok listázása
- Új kurzus hozzáadása
- Regisztrált kurzus adatainak módosítása
- Regisztrált kurzus törlése

Tanárok jogai:

- Diákok listázása
- Kurzusok listázása
- Új kurzus hozzáadása
- Saját kurzusának adatainak módosítása
- Regisztrált diák hozzáadása a tanár saját kurzusaihoz
- Regisztrált diák eltávolítása a tanár saját kurzusáról
- Regisztrált kurzus törlése

Diákok jogai:

- Saját kurzusok listázása
- Saját kurzuson belül hozzáférés a tananyagokhoz, tesztekhez, stb.
- Kurzus igénylés indítása

Megjegyzés: Ebben a kontextusban a "Regisztrált" szó jelentése:
Az adatbázisba felvitt rekord, lehet szó tanárrol, adminisztrátorról vagy diákról.

# Követelmény lista

## Funkcionális követelmények:

- Adminisztrátoroknak és tanároknak biztosított regisztrációs lehetőség
- Diákok autómatikus felvétele a rendszerbe
- Regisztrációt visszaigazoló email: a felhasználó kap egy igazoló emailt a regisztrációjáról
- Bejelentkezés: bejelentkezési felület, ahol a felhasználó a felhasználóneve és jelszava megadásával be tud lépni
- Az adminisztrátorok képesek menedzselni a tanárokat, diákokat és a kurzusokat
- A tanárok menedzselik a kurzusokat és a hozzá tartozó diákokat
- A diákok megtekinthetik a kurzusokat és interaktálhatnak a számukra elérhető funkciókkal
- Főoldal: A felhasználók ki tudják választani a számukra szükséges menüpontokat: Kurzusok, egyéb felületek
- Kurzusok: Különböző menüpontok elérhetők: modulok, jegyzetek tesztek stb.

## Nem funkcionális követelmények:

- A weboldalt interneten lehet elérni és akkor is megfelelően jelenik meg.
- Reszponzív megjelenés különböző eszközökön.
- A témára vonatkozó adatokat tartalmazza, azaz ne jelenjenek meg oda nem illő tartalmak.
- A felhasználók könnyen el tudjanak benne igazodni.
- A kurzusok legyenek rendszerezve, legyenek könnyen elérhetők.
- A funkciók a leírtaknak megfelelően működjenek.

## Riport az ügyféllel

|   Projekt név    |                        Feuer Moodle                        |
| :--------------: | :--------------------------------------------------------: |
|  Dokumentum ID   |                         AFP2 2022                          |
|   Riport célja   |            Követelmény specifikáció létrehozása            |
| Riport formátuma |                             md                             |
|     Helyszín     |         Eger, Eszterházy Károly Egyetem – C épület         |
|      Dátum       |                         2021.02.28                         |
|   Ügyfél neve    |                     Dr. Kedves György                      |
|    Ügyfél ID     |                            TUZ                             |
| Fejlesztő csapat |                           Feuer                            |
|      Tagok       | Szabó Gergő Róbert, Oravecz Áron,Alexa Kornél, Csik Patrik |
|     Másolat      |                  Ügyfél és tagok részére                   |

_Bemutatkozás_

**Ügyfél**: Egyetemünk informatikai karán évek óta tervezett egy olyan rendszer megvalósítása, amely megkönnyíti az online tanulást mind a tanárok és a diákok részére is. Úgy gondoljuk, hogy 2022-ben amikor a technológia ilyen mértékben fejlődik intézményünk sem maradhat le. A tervezett moodle rendszer megkönnyíti a tananyagok egyedi feldolgozását a diákok számára, függetlenül szaktársaiktól és tanáraiktól. Ezzel a rendszererrel és minden előnyével szeretnénk motiválni hallgatóinkat a fejlődésre és a rendszeres tanulásra.

**Ekecluded**: Egy ilyen rendszer megvalósításához szükséges nagy mennyiségű adatok tárolására, mind a tananyagokról és a rendszert használó feélhasználókról is. Mi ezzel kapcsolatban az elképzelése?

**Ügyfél**: Azt szeretnénk, ha egy zárt rendszert alkotnának meg, amihez kizárólag az intézmény dolgozói és a hallgatók férhetnek hozzá. A személyes adatokat bizalmasan kell tárolni, harmadik fél nem férhet hozzá.
Célunk, hogy a rendszer kezelhetősége a lehető legegyszerűbb legyen. Ezért a diákok, csak az őket erintő információkhoz férhetnek hozzá. Például az aktuális szemeszterben tartott előadások és gyakorlati órákhoz rendelt kurzusokhoz és anyagaihoz.
Szeretnénk azt elkerülni, hogy a weboldal használata túl bonyolult legyen és a felhasználóknak órákon át böngészniük kelljen az elérhető kurzusokat, hogy megtalálják a számukra szükséges információkat.

**Ekecluded**: Hogyan érnék el azt, hogy egy adott felhasználó csak az őt érintő részeket érjék el a moodleből?

**Ügyfél**: Rendszerünk a felhasználói csoportokra alapszik. A diákok csak az őket érintő kurzusokat látják, nem tudnak böngészni az összes kurzus között. Ezeket a beállításokat tanáraik fogják elvégezni. A tanárokra vonatkozó jogosultségi beállÍtásokat az adminisztrátoraink végzik akik egy átfogóbb képet kapnak a rendszerről.

**Ekecluded**: Az adminisztrátorok milyen feladatköröket fognak elvégezni?

**Ügyfél**: Az adminisztrátorok lesznek a legnagyobb joggal bíró felhasználók a rendszerben. Nekik áll jogában regisztrálni új tanárokat, diákokat, adatokat átfogóan módosítani és rekordokat törölni az adatbázisból.
Az adminisztrátorok képesek új kurzusokat létrehozni, létező kurzusok adatit módosítani, ezekhez diákokat, tanárokat rendelni vagy törölni.
Az adminisztrátorok mindennapi munkája igazán felelősségteljes és összetett feladat.

**Ekecluded**: Ehhez szükséges egy jogosultsági rendszer a különböző felhasználók számára és nekik felületet is kell ehhez biztosítanunk.

**Ekecluded**: Ezeket a kéréseket meg tudjuk valósítani. Miben tudunk még segíteni?

**Ügyfél**: A weboldal kinézetéhez már volt korábban egy tervünk, amit egy designer állított össze, azonban nem vagyunk elégedettek a munkájával, és szeretnénk ezt Önökre bízni, hogy a legmodernebb, olvasóbarát felületet alakítsák ki számunkra.

**Ekecluded**: Ha bármilyen egyéb igény merülne fel Önökben, kérem keresse bizalommal csapatunkat.

# Fogalomszótár:

- **PHP Laravel**: A Laravel egy PHP keretrendszer, amely drasztikusan javítja a termelékenységet. Már jó ideje itt van. 2011 júniusában jelent meg az első kiadás. Azonban az alapító Taylor Otwell és a legénység aktívan fejleszti. Ez a világ egyik leggyakoribb PHP-keretrendszere az internetes alkalmazások fejlesztésére a kicsi és a nagy projektek között. Hatékonysága, tulajdonságai és méretezhetősége miatt a Laravel a profi tervezők döntése. Olyan könnyen adaptálható, hogy kidolgozza saját webes keretét, amely megfelel a webes alkalmazás igényeinek.
- **Webalkalmazás**: Egy adott tevékenységi területen való webalkalmazást hasonlóan foghatunk fel, mint egy adott cél érdekében megvalósult létesítményt (pl.: egy termelőüzemet, vagy egy kereskedelmi objektumot), vagy mint egy szolgáltatást, amiket tulajdonképpen meg kell előznie egy fejlesztési, illetve beruházási folyamatnak. Itt is – mint minden számítástechnikai fejlesztésnél és alkalmazásnál - a rendszerszemlélet, egy meghatározó tényező.
- **Weblap:** A weblap (más szóval weboldal) egy olyan számítógépes dokumentum, mely megfelel a World Wide Web számára, és alkalmas arra, hogy egy webböngésző megjelenítse.
- **Adminisztrátor:** Az adminisztrátorokat azért választja meg a közösség, hogy a projektet megvédjék a nemkívánatos külső beavatkozásoktól, illetve, hogy a projekt fejlődését technikai vagy egyéb módon elősegítsék.
- **Adatbázis:** Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.
