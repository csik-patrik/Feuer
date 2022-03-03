
# Bevezető:

A moodle rendszer célja, hogy a diákok és tanárok számára megkönnyítse a mindennapi munkát. Legfőbb felhasználási körébe tartoznak a tananyagok, tesztek, dolgozatok, feladatok kiírása a diákok számára, illetve a tanuláshoz szükséges fileok megosztása. Az egyes tantárgyakat kurzusoknak, a különböző témaköröket moduloknak nevezzük, melyekhez hozzáférést biztosíthatunk az ahhoz jogosult diákok számára. Használatának előnye még a rendezettség, azonnal visszajelzés tesztek esetén, átlátható tanterv követés.

# Jelenlegi helyzet leírása:

A Moodle egy igen elterjedt, nagy népszerűségnek örvendő tanulást segítő felület. Népszerűségének egyik oka az egyszerű kezelhetősége. A Moodle ugyanis egyszerre alkalmas a tartalom tárolására, szerkesztésére, összeállítására, a diákok „kezelésére”, az egyes diákok haladásának, tevékenységének nyomon követésére, munkájuk értékelésére, úgy, hogy mindeközben a klasszikus tanulási folyamat részleteit virtuálisan is megjeleníti, tehát osztályok vannak, házi feladatok adhatók, a résztvevők kommunikálhatnak.
# Vágyálom rendszer leírása:

Célunk egy Moodle rendszer fejlesztése amely a PHP Laravel keretrendszer segítségével készül. A program egy MySQL adatbázishoz csatlakozik amiből adatokat kér le, módosít és töröl. Három szerepkört különböztetünk meg: adminisztrátor, tanár és diák. Az adminisztrátorok hozzáadhatnak az adatbázishoz új kurzusokat, diákok és tanárkat. Ezenkívűl az adatbázisban tárolt adatokat módosíthatják és törölhetik. A tanárok szerepköre lefedi a kurzusok, modulok létrehozását és karbantartását, diákokat rendelhetnek kurzusaikhoz, illetve adatokat tölthetnek fel, módosíthatnak és törölhetnek, olyan területeken ahová hozzáférésük engedélyezett. (PL: kurzusok, modulok) A diákok megtekinthetik a hozzájuk rendelt kurzusokat, tananyagokat és modulokat. Kitölthetnek teszteket, fájl-okat tölthetnek fel. Hogy a diák számára mi elérhető az adminisztrátorok és a tanárok határozzák meg.

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

Az Eszterházy Károly Katolikus Egyetemen jelenleg nem üzemel hasonló rendszer, ezen üzleti hiány kitöltésére készül a project. (Ez egy fiktív feladat az AFP2 tantárgyhoz, jelenleg is elérhető az EKE moodle rendszere, ez a project a másolata.)

# Igényelt üzleti folyamatok modellje:

Moodle rendszerünk három szerepkört különböztet meg: adminisztrátor, tanár és diák. Alkalmazásunk a követelmény listában feltüntetett funkcionális és nem funkcionális követelményeknek megfelelően fog elkészülni. Az adminisztrátoroknak és tanároknak biztosítunk egy regisztrációs felületet, a diákokat az intézménybe való jelentkezésük és személyes adataik felhasználásával visszük fel a rendszerbe. A felhasználókat szerepkörük alapján csoportosítjuk.

Adminisztrátorok jogai:

-   Diákok listázása
-   Új diák hozzáadása
-   Regisztrált diák adatainak módosítása
-   Regisztrált diák törlése
-   Tanárok listázása
-   Új tanár hozzáadása
-   Regisztrált tanár adatainak módosítása
-   Regisztrált tanár törlése
-   Kurzusok listázása
-   Új kurzus hozzáadása
-   Regisztrált kurzus adatainak módosítása
-   Regisztrált kurzus törlése

Tanárok jogai:

-   Diákok listázása
-   Kurzusok listázása
-   Új kurzus hozzáadása
-   Saját kurzusának adatainak módosítása
-   Regisztrált diák hozzáadása a tanár saját kurzusaihoz
-   Regisztrált diák eltávolítása a tanár saját kurzusáról
-   Regisztrált kurzus törlése

Diákok jogai:

-   Saját kurzusok listázása
-   Saját kurzuson belül hozzáférés a tananyagokhoz, tesztekhez, stb.
-   Kurzus igénylés indítása

Megjegyzés: Ebben a kontextusban a "Regisztrált" szó jelentése: Az adatbázisba felvitt rekord, lehet szó tanárról, adminisztrátorról vagy diákról.

# Követelménylista
| Modul | ID | Név | Verziószám | Kifejtés |
|-------|----|-----|------------|-----------------------------------------|
| Jogosultság | K1 | Bejelentkezési felület | 1.0 | A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap. |
|Jogosultság|K2|Regisztráció|1.0|A felhasználó a felhasználói nevének, email címének és jelszavának megadásával regisztrálja magát. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót.|
|Jogosultság|K3|Jogosultsági szintek|1.0|**Admin** : Képes új kurzusokat hozzáadni, módosítani és törölni, felhasználó adatokat módosítani. **Tanár** : Képesek új kurzusokat hozzáadni, sajátjukat módosítani és törölni, a kurzusokon belül keresni, személyes adatokat változtatni ( e-mail, jelszó, profilkép, stb. ). **Diák** : Képes a kurzusok között keresni, kurzusokat megtekinteni, ha van hozzáférésük az adott kurzusokhoz.|
| Modifikáció | K4 | Felhasználó módosítása | 1.0 | A felhasználó módosítani tudja saját Felhasználónevét. Ehhez szükséges a régi és az új felhasználók megadása, az új megerősítése, valamint a felhasználó jelszavának megadása. |
| Modifikáció | K5 | Jelszó módosítása | 1.0 | A felhasználó módosítani tudja saját Felhasználónevét. Ehhez szükséges a régi és az új felhasználók megadása, az új megerősítése, valamint a felhasználó jelszavának megadása.|
| Modifikáció | K6 | Elfelejtett felhasználónév / jelszó | 1.0 | Ha a felhasználó elfelejtette a felhasználónevét, vagy jelszavát akkor ezzel az opcióval egy Adminhoz tud fordulni.|
| Kurzus | K7 | Kurzus létrehozása | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes új kurzust létrehozni|
| Kurzus | K8 | Kurzus módosítása | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzust módosítani|
| Kurzus | K9 | Kurzus törlése | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzust törölni|
| Kurzus | K10 | Diák hozzáadása kurzushoz | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzushoz Diák jogosultsággal rendelkező felhasználót hozzáadni.|
| Kurzus | K11 | Diák eltávolítása kurzusból | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzusból Diák jogosultsággal rendelkező felhasználót eltávolítani.|
| Kurzus | K12 | Kurzus keresése | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzusai közt keresni.|
| Kurzus | K13 | Kurzus megtekintése | 1.0 | A felhasználó a megfelelő jogosultságszint birtokában képes meglévő kurzusait megtekinteni.|

# Használati esetek
## A rendszer felhasználói a következők:

-   Adminisztrátor
-   Tanár
-   Diák

## A rendszernek a következő funkciókat kell ellátnia:
-   az adminisztrátorok tudjanak új kurzusokat hozzáadni, módosítani és törölni
-   az adminisztrátorok tudjanak felhasználó adatokat módosítani
-   a tanárok tudjanak új kurzusokat hozzáadni, sajátjukat módosítani és törölni
-   a tanárok tudjanak a kurzusokon belül keresni
-   a tanárok tudjanak személyes adatokat változtatni ( e-mail, jelszó, profilkép, stb. )
-   a diákok tudjanak a kurzusok között keresni
-   a diákok tudjanak kurzusokat megtekinteni, ha van hozzáférésük az adott 		kurzusokhoz
## Előfeltételek:
-   adminisztrátorok részére a rendszer használatához jogosultság, azaz jelszó szükséges (az adminisztrátorok profilját a projektfelelősök adják hozzá az adatbázishoz)
-   a tanároknak és diákoknak regisztráció szükséges a funkciók használatához

# Képernyőtervek


# Forgatókönyvek


# Funkció - követelmény megfeleltetés


# Fogalomszótár
