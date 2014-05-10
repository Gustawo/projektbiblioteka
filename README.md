projektbiblioteka
=================
Pliki zapisujemy na serwerze w jednym folderze (np projektbiblioteka).
Upewniamy sie ze na serwerze jest wlaczona obsluga mysqli.

Domyslny kontroler to main, a wiec wpisujac w przegladarke:
localhost/projektbiblioteka/ 
zobaczymy efekt pracy tego kontrolera.

W szkielecie aplikacji nic nie zmieniamy, interesuja nas tylko foldery: 
/application/models (klasy dostepu do bazy danych)
/application/views (widoki html do wyswietlania informacji)
/application/controllers (klasy przetwarzajace informacje przeslane z widoków i decydujace co bedzie wyswietlone)

Na pliki css i js poki co zrobie folder "content" poza folderem aplikacji ponieważ jest to w jakis sposob zabezpieczone
i pliki tego typu nie wykonaja sie bedac wewnatrz folderu naszego projektu.
