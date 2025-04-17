🇮🇹 Italiano
Nel mio progetto Laravel, ho creato una sezione dedicata ai cantanti, accessibile dalla pagina "Chi siamo".
All'interno della route /chi-siamo, ho definito un array contenente i dati di diversi artisti: nome, data di nascita, immagine, biografia e due album per ciascuno, con i relativi titoli e tracce.
Ho poi passato questo array alla vista about-us, così da poter visualizzare un elenco completo dei cantanti nella pagina.

Successivamente, ho creato una seconda route /chi-siamo/detail/{name} per visualizzare una pagina di dettaglio per ogni artista.
In questa route ricevo come parametro il nome del cantante e, tramite un ciclo foreach, confronto il valore ricevuto con il nome presente nell'array. Quando trovo una corrispondenza, passo i dati del cantante alla vista about-us-detail, permettendo così all'utente di accedere a una pagina con tutte le informazioni specifiche di quell'artista.


----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

🇺🇸 English
In my Laravel project, I created a section dedicated to singers, accessible from the "Chi siamo" (About Us) page.
Inside the /chi-siamo route, I defined an array containing data for several artists: name, birth year, image, biography, and two albums for each one, with their respective titles and tracks.
I then passed this array to the about-us view, allowing me to display a complete list of singers on the page.

After that, I created a second route /chi-siamo/detail/{name} to show a detailed page for each artist.
In this route, I receive the singer's name as a parameter and use a foreach loop to compare it with the names in the array. When I find a match, I pass the singer's data to the about-us-detail view, allowing users to access a page with all the specific information about that artist.

