<?php
/**
 * Centraal FAQ-bestand voor Stam Stoffeeratelier.
 * Elke vraag heeft één of meer 'categories' tags.
 * Beschikbare tags: algemeen, prijs, eetkamerstoelen, fauteuils,
 * bootkussens, tuinkussens, horeca, sportkantines, caravans-campers
 *
 * Voeg hier nieuwe vragen toe, of pas bestaande aan.
 */

$all_faqs = [

    // --- ALGEMEEN ---
    [
        'q' => 'Hoe werkt het aanvragen van een offerte?',
        'a' => 'Stuur een foto, de afmetingen en het aantal meubelstukken via WhatsApp, mail of Instagram. Op basis daarvan maak ik een offerte op maat, vrijblijvend en zonder ingewikkelde formulieren.',
        'categories' => ['algemeen'],
    ],
    [
        'q' => 'Bieden jullie garantie op het stoffeerwerk?',
        'a' => 'Ja, op elk stoffeerwerk geldt garantie. Kijk voor de precieze voorwaarden op de garantiepagina.',
        'categories' => ['algemeen'],
    ],
    [
        'q' => 'Kan ik zelf een stof uitkiezen?',
        'a' => 'Zeker. Via de Stoffenkiezer blader je door meer dan 1000 stoffen van verschillende leveranciers. Zoek je iets specifieks, laat het gerust weten.',
        'categories' => ['algemeen'],
    ],
    [
        'q' => 'In welke regio\'s werkt Stam Stoffeeratelier?',
        'a' => 'Voornamelijk in Heemskerk, Beverwijk, Castricum, Uitgeest, Akersloot, Haarlem, de Zaanstreek en Heiloo. Woon je ergens anders, dan ben je ook van harte welkom.',
        'categories' => ['algemeen'],
    ],
    [
        'q' => 'Hoe lang duurt het stofferen van mijn meubel gemiddeld?',
        'a' => 'De meeste stoelen en fauteuils zijn binnen één tot twee weken klaar. Grotere klussen, zoals een complete caravan of set van acht stoelen, kunnen iets langer duren.',
        'categories' => ['algemeen'],
    ],

    // --- PRIJS (algemeen prijs-overzicht) ---
    [
        'q' => 'Waar hangt de prijs van het stofferen vanaf?',
        'a' => 'De prijs hangt af van de hoeveelheid stof, de prijs per meter van de gekozen stof, de arbeidstijd (rondingen, naden en details kosten meer tijd) en de staat van het binnenwerk (schuim of veren die eventueel vervangen moeten worden).',
        'categories' => ['prijs'],
    ],
    [
        'q' => 'Wordt het goedkoper als ik meerdere meubelstukken tegelijk laat stofferen?',
        'a' => 'Vaak wel. Bij sets van bijvoorbeeld vier, zes of acht stoelen werk ik in serie, wat efficiënter is dan losse stukken apart bekleden.',
        'categories' => ['prijs'],
    ],

    // --- EETKAMERSTOELEN ---
    [
        'q' => 'Wat kost het stofferen van een eetkamerstoel?',
        'a' => 'Reken op €60 tot €180 per stoel, inclusief werkuren. De uiteindelijke prijs hangt af van de gekozen stof en de staat van de stoel.',
        'categories' => ['eetkamerstoelen', 'prijs'],
    ],
    [
        'q' => 'Kunnen jullie een hele set eetkamerstoelen in dezelfde stof bekleden?',
        'a' => 'Ja, voor sets van vier, zes of acht stoelen werk ik altijd in serie, zodat alle stoelen exact dezelfde afwerking krijgen.',
        'categories' => ['eetkamerstoelen'],
    ],
    [
        'q' => 'Welke stoffen zijn geschikt voor eetkamerstoelen?',
        'a' => 'Voor intensief gebruikte stoelen kies ik vaak stoffen met een hoge Martindale-waarde, zoals stevige velours, bouclé of slijtvaste effen stoffen.',
        'categories' => ['eetkamerstoelen'],
    ],

    // --- FAUTEUILS ---
    [
        'q' => 'Wat kost het stofferen van een fauteuil?',
        'a' => 'De prijs varieert sterk, van €200 tot €550, afhankelijk van de grootte en complexiteit van de fauteuil.',
        'categories' => ['fauteuils', 'prijs'],
    ],
    [
        'q' => 'Is een fauteuil laten stofferen goedkoper dan een nieuwe kopen?',
        'a' => 'Vaak wel, en je behoudt het zitcomfort en de vorm waar je aan gehecht bent -- vooral bij designfauteuils of stukken met emotionele waarde.',
        'categories' => ['fauteuils'],
    ],

    // --- TUINKUSSENS ---
    [
        'q' => 'Wat kost het laten maken van tuinkussens?',
        'a' => 'Dit is volledig afhankelijk van de hoeveelheid: een los kussentje kan al vanaf €40, een complete tuinbank loopt op tot €400.',
        'categories' => ['tuinkussens', 'prijs'],
    ],
    [
        'q' => 'Zijn tuinkussens van Stam Stoffeeratelier bestand tegen regen?',
        'a' => 'Ja, voor buitengebruik gebruik ik duurzame, sneldrogende buitenstoffen die tegen weer en wind kunnen.',
        'categories' => ['tuinkussens'],
    ],

    // --- BOOTKUSSENS ---
    [
        'q' => 'Kunnen bootkussens op maat gemaakt worden?',
        'a' => 'Ja, iedere boot is anders. Stuur de afmetingen en een foto door, dan maak ik kussens die precies passen.',
        'categories' => ['bootkussens'],
    ],
    [
        'q' => 'Welke stof wordt gebruikt voor bootkussens?',
        'a' => 'Voor bootkussens gebruik ik waterbestendige, UV-bestendige buitenstoffen die tegen zon en vocht bestand zijn.',
        'categories' => ['bootkussens'],
    ],

    // --- HORECA ---
    [
        'q' => 'Kunnen jullie een hele horecazaak in één keer aanpakken?',
        'a' => 'Ja, van terrasmeubilair tot binnenstoelen -- ik kan een volledige horecazaak in één traject herstofferen, met slijtvaste stoffen die tegen intensief gebruik kunnen.',
        'categories' => ['horeca'],
    ],
    [
        'q' => 'Welke stoffen zijn geschikt voor horecameubilair?',
        'a' => 'Voor horeca gebruik ik speciale slijtvaste stoffen die bestand zijn tegen dagelijks, intensief gebruik en die extra lang mooi blijven.',
        'categories' => ['horeca'],
    ],

    // --- SPORTKANTINES ---
    [
        'q' => 'Stofferen jullie ook sportkantines en fitnessapparatuur?',
        'a' => 'Ja, van kantinestoelen tot de bekleding van fitnessapparaten -- ik werk met slijtvaste materialen die tegen veelvuldig gebruik bestand zijn.',
        'categories' => ['sportkantines'],
    ],

    // --- CARAVANS & CAMPERS ---
    [
        'q' => 'Wat kost het stofferen van een caravan of camper?',
        'a' => 'Reken op €200 tot €1.000. Bij het volledig opnieuw stofferen van alle banken en matrassen ga je richting de bovenkant van deze prijsindicatie.',
        'categories' => ['caravans-campers', 'prijs'],
    ],
    [
        'q' => 'Kunnen jullie ook alleen de matrassen van een camper vervangen?',
        'a' => 'Ja, dat kan los van de rest van de bekleding. Stuur de afmetingen door voor een passende offerte.',
        'categories' => ['caravans-campers'],
    ],

];

/**
 * Haal alle FAQ's op die bij minstens één van de opgegeven categorieën horen.
 * Voorbeeld: get_faqs_by_category($all_faqs, ['fauteuils', 'algemeen']);
 */
function get_faqs_by_category(array $all_faqs, array $slugs): array {
    return array_values(array_filter($all_faqs, function ($faq) use ($slugs) {
        return count(array_intersect($faq['categories'], $slugs)) > 0;
    }));
}