# Tüzes Moodle Követelmény specifikáció
## Írta: Csik Patrik,
# Bevezető:
A moodle rendszer célja, hogy a diákok és tanárok számára megkönnyítse a mindennapi munkát.
Legfőbb felhasználási körébe tartoznak a tananyagok, tesztek, dolgozatok, feladatok kiírása a diákok számára, illetve a tanuláshoz szükséges fileok megosztása.
Az egyes tantárgyakat kurzusoknak, a különböző témaköröket moduloknak nevezzük, mellyekhez hozzáférést biztosíthatunk az ahhoz jogosult diákok számára.
Használatának előnye még a rendezettség, azonnal visszajelzés tesztek esetén, átlátható tantervkövetés. 
# Jelenlegi helyzet leírása:
A Moodle egy igen elterjedt, nagy népszerűségnek örvendő tanulást segítő felület. Népszerűségének egyik oka az egyszerű kezelhetősége. A Moodle ugyanis egyszerre alkalmas a tartalom tárolására, szerkesztésére, összeállítására, a diákok „kezelésére”, az egyes diákok haladásának, tevékenységének nyomon követésére, munkájuk értékelésére, úgy, hogy mindeközben a klasszikus tanulási folyamat részleteit virtuálisan is megjeleníti, tehát osztályok vannak, házi feladatok adhatók, a résztvevők kommunikálhatnak.
# Vágyálom rendszer leírása:
Célunk egy moodle rendszer fejlesztése amely a PHP Laravel keretrendszer segítségével készül. A program egy MySQL adatbázishoz csatlakozik ahonnan adatokat kér le, módosít és töröl. Három különböző szerepkört különböztetünk meg: Adminisztrátor, Tanár és Diák. Az adminisztrátorok hozzáadhatnak az adatbázishoz új kurzusokat, diákok és tanárkat. Ezen kívűl az adatbázisban tárolt adatokat módosíthatják és törölhetik.
A tanárok szerepköre lefedi a kurzusok, modulok létrehozását és karbantartását, diákokat rendelhetnek kurzusaikhoz, illetve adatokat tölthetnek fel, módosíthatnak és törölhetnek olyan területeken ahová hozzáférésük engedélyezett. (PL: kurzusok, modulok)
A diákok megtekinthetik a hozzájuk rendelt kurzusokat, tananyagokat és modulokat.
Kitölthetnek teszteket, fileokat tölthetnek fel. Azt, hogy a diák számára mi elérhető az adminisztrátorok és a tanárok határozzák meg. 
# A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások leírása:
A felhasználó által megadott személyes adatok bizalmasan lesznek kezelve, nem lesznek át adva harmadik félnek. Ezekkel az adatokat az adminisztrátorok és a weblap készítői nem tudják felhasználni saját céljaikra. A felhasználó által nyújtott bizalommal nem fognak vissza élni. Sohasem fog kapni a felhasználó olyan email-t, amiben kérik őt arra, hogy a jelszavát adja meg. Az oldalon mindig az aktuális, friss információk lesznek megjelenítve. A felhasználó megfelelően lesz tájékoztatva, azaz az oldalon az összes olyan információ fenn lesz, amelyre szüksége van. A rendszerhez csak az intézmény dolgozói és diákjai férhetnek hozzá egyéni azonosítóval.
# Jelenlegi üzleti folyamatok modellje:
Az Eszterházy Károly Katolikus Egyetemen jelenleg nem üzemel hasonló rendszer, ezen üzleti hiány kitöltésére készül a project.
(Ez egy fiktív feladat az AFP2 tantáryghoz, jelelneg is elérhető az EKE moodle rendszere, ez a project a másolata.)
# Igényelt üzleti folyamatok modellje:
A moodlenek lesznek adminisztrátorai, tanárjai és diákjai. A követelmény listában feltüntetett funkcionális és nem funkcionális követelményeknek megfelelően fog majd elkészülni. Az adminisztrátoroknak és tanároknak biztosítunk egy regisztrációs felületet, a diákok az intézménybe való jelentkezésük és személy adataik felhasználásával visszik fel a rendszerbe (Neptunkód, Teljes név). A felhasználókat szerepkörük alapján csoportosítjuk. 
# Követelmény lista
## Funkcionális követelmények:
* Adminisztrátornak és tanároknak biztosított regisztrációs lehetőség,
* Diákok autómatikus felvétele a rendszerbe,
* Regisztrációt visszaigazoló email: a felhasználó kap egy igazoló emailt a regisztrációjáról,
* Bejelentkezés: bejelentkezési felület, ahol a felhasználó a neptunkódja (admin/diák esetén felhasználónév) és a jelszava megadásával tud be lépni.
 * Az adminisztrátorok képesek menedzselni a tanárokat, diákokat és a kurzusokat.
 * A tanárok menedzselik a kurzusokat és a hozzá tartozó diákokat.
 * A diákok megtekinthetik a kurzusokat és interaktálhatnak a számukra elérhető funkciókkal.
 * Főoldal: A userek ki tudják választani a számukra szükséges menüpontokat: Kurzusok, egyéb felületek
 * Kurzusok: Különböző menüpontok elérhetők: modulok, jegyzetek tesztek stb.
## Nem funkcionális követelmények:
- A weboldalt interneten lehet elérni és akkor is megfelelően jelenik meg.
- Reszponzív megjelenés különböző eszközökön.
- A témára vonatkozó adatokat tartalmazza, azaz ne jelenjenek meg oda nem illő tartalmak.
- A felhasználók könnyen el tudjanak benne igazodni.
- A kurzusok legyenek rendszerezve, legyenek könnyen elérhetők.
- A funkciók a leírtaknak megfelelően működjenek.
# Irányított és szabad szöveges riportok szövege:
# Fogalomszótár:
- **PHP Laravel**: A Laravel egy PHP keretrendszer, amely drasztikusan javítja a termelékenységet. Már jó ideje itt van. 2011 júniusában jelent meg az első kiadás. Azonban az alapító Taylor Otwell és a legénység aktívan fejleszti. Ez a világ egyik leggyakoribb PHP-keretrendszere az internetes alkalmazások fejlesztésére a kicsi és a nagy projektek között. Hatékonysága, tulajdonságai és méretezhetősége miatt a Laravel a profi tervezők döntése. Olyan könnyen adaptálható, hogy kidolgozza saját webes keretét, amely megfelel a webes alkalmazás igényeinek.
- **Webalkalmazás**: Egy adott tevékenységi területen való webalkalmazást hasonlóan foghatunk fel, mint egy adott cél érdekében megvalósult létesítményt (pl.: egy termelőüzemet, vagy egy kereskedelmi objektumot), vagy mint egy szolgáltatást, amiket tulajdonképpen meg kell előznie egy fejlesztési, illetve beruházási folyamatnak. Itt is – mint minden számítástechnikai fejlesztésnél és alkalmazásnál - a rendszerszemlélet, egy meghatározó tényező.
- **Weblap:** A weblap (más szóval weboldal) egy olyan számítógépes dokumentum, mely megfelel a World Wide Web számára, és alkalmas arra, hogy egy webböngésző megjelenítse.
- **Adminisztrátor:** Az adminisztrátorokat azért választja meg a közösség, hogy a projektet megvédjék a nemkívánatos külső beavatkozásoktól, illetve, hogy a projekt fejlődését technikai vagy egyéb módon elősegítsék.
- **Adatbázis:** Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.
