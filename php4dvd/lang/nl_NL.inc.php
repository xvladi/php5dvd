<?php
/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 * 
 * config.php:
 * $settings["languages"] = array("en_US"); -> $settings["languages"] = array("en_US", "nl_NL");
 * $settings["defaultlanguage"] = "en_US" -> $settings["defaultlanguage"] = "nl_NL";
 */

/**
 * Title
 */
define("_TITLE",									"Mijn film verzameling");

/**
 * Menu
 */
define("MY_COLLECTION",								"Mijn verzameling");
define("HOME",										"Home");
define("MY_PROFILE",								"Mijn profiel");
define("USER_MANAGEMENT",							"Gebruikers");
define("LOG_IN", 									"Log in");
define("LOG_OUT",									"Log uit");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Weet je zeker dat je wilt uitloggen?");

/**
 * Log in page
 */
define("USER_NAME",									"Gebruikersnaam");
define("PASSWORD",									"Wachtwoord");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Onjuiste gebruikersnaam of wachtwoord");

/**
 * Home
 */
// Menu
define("ADD_MOVIE",									"Film toevoegen");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Alles bijwerken");
define("EXPORT_TO_CSV",								"Exporteren");
// Search
define("SEARCH_DEFAULT_TEXT",						"Zoek naar films...");
define("ALL_CATEGORIES",							"Alle categorie&euml;n");
define("SORT_BY",									"Sorteer op");
define("name asc",									"naam (A-Z)");
define("name desc",									"naam (Z-A)");
define("year asc",									"jaar (0-9)");
define("year desc",									"jaar (9-0)");
define("rating asc",								"score (0-9)");
define("rating desc",								"score (9-0)");
define("format asc",								"formaat (A-Z)");
define("format desc",								"formaat (Z-A)");
define("seen asc",									"gezien");
define("seen desc",									"gezien omgekeerd");
define("own asc",									"bezit");
define("own desc",									"bezit omgekeerd");
define("added asc",									"toegevoegd (oud-nieuw)");
define("added desc",								"toegevoegd (nieuw-oud)");
define("loaned asc",								"uitgeleend (oud-nieuw)");
define("loaned desc",								"uitgeleend (nieuw-oud)");
define("ALL", 										"Alle");
define("RESULTS_PER_PAGE",							"resultaten per pagina");
// Results
define("NO_RESULTS_FOUND",							"Er zijn geen films gevonden.");
define("NO_COVER",									"Geen afbeelding");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"IMDb informatie");
define("VIEW_TRAILER",								"Bekijk trailer");
define("DOWNLOAD_COVER",							"Download hoes");
define("OWN",										"In bezit");
define("NOT_OWN",									"Niet in bezit");
define("SEEN",										"Gezien");
define("UNSEEN",									"Niet gezien");
define("EDIT",										"Bewerken");
define("REMOVE",									"Verwijderen");
// Movie information
define("LOANED_OUT",								"Uitgeleend");
define("TO",										"aan");
define("ON",										"op");
define("MINUTES",									"minuten");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Opslaan");
define("UPDATE",									"Bijwerken");
define("REMOVE_COVER",								"Verwijder hoes");
// IMDb search
define("ADD_FROM_IMDB",								"Toevoegen vanaf IMDb");
define("SEARCH",									"Zoeken");
define("RESULTS_FROM_IMDB",							"Resultaten van IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Film informatie");
define("IMDB_NUMBER",								"IMDb nummer");
define("TITLE",										"Titel");
define("AKA_TITLES",								"Andere titels");
define("YEAR",										"Jaar");
define("DURATION_MINUTES",							"Duur (minuten)");
define("RATING",									"Score");
define("FORMAT",									"Formaat");
define("DVD",										"DVD");
define("I_HAVE_SEEN_THIS_MOVIE",					"Ik heb deze film gezien");
define("I_OWN_THIS_MOVIE",							"Ik bezit deze film");
define("LOANED_OUT_TO",								"Uitgeleend aan");
define("LOANED_OUT_SINCE",							"Uitgeleend sinds");
define("YES",										"Ja");
define("NO",										"Nee");
define("COVER",										"Hoes");
define("SEARCH_FOR_COVER",							"Zoek naar hoes");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Zoek naar trailer");
define("PERSONAL_NOTES",							"Persoonlijke opmerkingen");
define("TAGLINES",									"Kreten");
define("PLOT_OUTLINE",								"Samenvatting");
define("PLOTS",										"Plot");
define("LANGUAGES",									"Talen");
define("SUBTITLES",									"Ondertitelingen");
define("AUDIO",										"Geluid");
define("VIDEO",										"Beeld");
define("COUNTRY",									"Land");
define("GENRES",									"Genre");
define("DIRECTOR",									"Regisseur");
define("WRITER",									"Schrijver");
define("PRODUCER",									"Producent");
define("MUSIC",										"Muziek");
define("CAST",										"Acteurs");
// Automatic update
define("AUTOUPDATE_INFO",							"Je films worden automatisch bijgewerkt vanaf IMDb. Dit kan even duren...");
define("STOP_UPDATE",								"Stop de update");

/**
* User management
*/
define("NEW_USER",									"Nieuwe gebruiker");
define("EMAIL",										"E-mail");
define("AGAIN",										"normaals");
define("ROLE",										"Rol");
define("GUEST",										"Gast (alleen kijken)");
define("EDITOR",									"Editor");
define("ADMIN",										"Admin");
define("USERS",										"Users");
define("LAST_LOGGED_IN",							"Laatst ingelogd");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Een gebruiker met dezelfde naam of e-mail adres bestaat al!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Verwijder de install/ map vanwege veiligheidsredenen!");
define("CONFIRM_REMOVE",							"Weet u zeker dat u dit wilt verwijderen?");
define("CONFIRM_REMOVE_COVER",						"Weet u zeker dat u deze hoes wilt verwijderen?");
// Validation
define("VALIDATOR_REQUIRED",						"Dit veld is verplicht");
define("VALIDATOR_NUMBER",							"Voer een juist nummer in");
define("VALIDATOR_DIGITS",							"Voer een juist nummer in");
define("VALIDATOR_EMAIL",							"Voer een juist e-mail adres in");
define("VALIDATOR_URL",								"Voer een juist URL in (http://...)");
define("VALIDATOR_DATE",							"Voer een juiste datum in (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Voer een juist plaatje in (jpg)");
define("VALIDATOR_EQUAL_TO",						"Beide waarden moeten gelijk zijn");

/**
* Installer
*/
define("INSTALLATION",								"Installatie");
define("WELCOME",									"Welkom");
define("WELCOME_TEXT",								"Dit is de installatie van php4dvd. Volg de stappen om de installatie te voltooien.");
define("NEXT",										"Volgende");
define("PERMISSIONS",								"Rechten");
define("PERMISSIONS_TEXT",							"De volgende mappen en bestanden moeten bestaan en schrijfrechten hebben:");
define("OK",										"ok");
define("FAILED",									"failed");
define("FIX_PERMISSIONS",							"Chmod (777) these directories with your favorite FTP client.");
define("REFRESH",									"Refresh");
define("CONFIGURATION",								"Configuration");
define("CONFIGURATION_TEXT",						"Fill out this form to configure php4dvd for your server.");
define("DATABASE",									"Database");
define("HOST",										"Server");
define("PORT",										"Poort");
define("WEBSITE",									"Website");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Taal");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Guest users can see my movie collection");
define("FAILED_TO_WRITE_FILE",						"Failed to write the file");
define("DATABASE_NEW_TEXT",							"A new version of the database will be installed. Any old existing tables will be removed!");
define("DATABASE_UPGRADE_TEXT",						"Your database will be upgraded to the latest version. No information will be removed (it is safe to make a backup first!).");
define("ACCEPT",									"I Accept");
define("FINISHED",									"Finished");
define("FINISHED_TEXT",								"Your installation is almost finished. Click the finish button below.");
define("FINISH",									"Finish");
?>