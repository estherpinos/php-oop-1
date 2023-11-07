<?php 

$movies = [
  new Movie ('El silencio', 'Clarice, affascinata da Hannibal, affronta con il suo aiuto un spietato assassino. Clarice Starling, giovane e ambiziosa studentessa dell\'Accademia dell\'FBI.', 8, new Media('elsilencio.jpg', 'El silencio'), 130),

  new Movie ('Home Alone','Kevin McCallister, il bambino protagonista, è l\'ultimo di cinque figli. I genitori pianificano un viaggio durante le feste natalizie coi figli ed altri parenti dimenticando però Kevin a casa per errore. ',9,  new Media('homealone.jpg', 'Home alone'),120) ,

  new Movie ('Il grinch','Cindy Lou è una bambina che vive nel paese di Chinonso e, in prossimità dei festeggiamenti per l\'arrivo del Natale, convince il sindaco del paesino ad invitare il Grinch, uno scontroso e malvagio essere fantastico, che vive con gli oggetti presi dalla discarica.',9, new Media('Grinch.jpg','il grinch' ), 100),

  new Movie ('Babbo Natale','Babbo Natale ha un grosso problema: tutti i bambini vogliono regali tecnologici, ma il suo team di elfi non è in grado di produrli. L\'elfo Romeo ha un altro problema: sua moglie è incinta ed entrambi sono preoccupati per il futuro della loro famigliola.',6, new Media('babbo.jpg', 'babbo natale'),110),


];

$series = [
  new TvSerie ('La casa di carta', 'Un criminale ha un piano per realizzare la più grande rapina della storia, da realizzare alla Zecca Reale di Spagna. Per realizzare i propri scopi, l\'uomo recluta otto persone che non hanno nulla da perdere.', 9, new Media('casadicarta.jpg', ' casas di carta'), 5),

  new TvSerie (' Vis a vis','Macarena Ferreiro è una giovane donna che, per amore del proprio capo, commette alcune gravi irregolarità fiscali e si ritrova imprigionata in un carcere femminile di massima sicurezza.',9,  new Media('visavis.jpg', 'Vis a vis'),4) ,

  new TvSerie ('Castle','Rick Castle, un celebre scrittore di romanzi gialli in cerca di ispirazione, viene contattato dalla detective Kate Beckett del NYPD per aiutare le forze dell\'ordine a risolvere casi complessi',9, new Media('castle.jpg','castle' ), 8),

  new TvSerie ('The mentalist','Patrick Jane, consulente del California Bureau of Investigation, utilizza le sue raffinate capacità di osservazione per risolvere i casi e per catturare l\'assassino della moglie e della figlia.
  ',8, new Media('thementalist.jpg','mentalist' ), 7)


];


?>