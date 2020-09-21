<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recreate the status from 2020

        // Woche 1: Montag 06.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Fitness im Freien',
                'description' => 'Um fit zu bleiben, muss man nicht viel Geld bezahlen. Dies geht auch ganz einfach auf der Strasse oder zu Hause. Dabei brauchen wir nichts, ausser unseren Körper. Wir zeigen dir, wie das geht. Falls du selbst Ideen hast, nimm diese einfach mit.',
                'active' => true,
                'beginning' => '2020-07-06 09:30:00',
                'end' => '2020-07-06 12:00:00',
                'min_participants' => 5,
                'max_participants' => 22,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Wettertaugliche, sportliche Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 0
            ],
            [
                'title' => 'Im Freien spielen',
                'description' => 'Wir toben uns beim Spielen im Freien aus. Wir machen verschiedene Arten von Fangis, Sitzball oder Versteckis. Dabei geht es uns vor allem um Spass. Damit wir das haben, bringe gute Laune und viel Sonnenschein mit.',
                'active' => true,
                'beginning' => '2020-07-06 14:00:00',
                'end' => '2020-07-06 16:30:00',
                'min_participants' => 10,
                'max_participants' => 28,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Wettertaugliche, sportliche Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 0
            ],
            [
                'title' => 'Tanzen wie in 1001 Nacht Unterstufe',
                'description' => 'Der orientalische Tanz ist ein mehrere hundert Jahre alter Tanzstil. Ursprünglich ist er in Ägypten entstanden und mittlerweile fast auf der ganzen Welt bekannt. Hast du Spass daran, dich zu bewegen? Und willst du mal einen "Klimpergürtel" und den Schleiertanz mit farbenfrohen Tüchern auszuprobieren? Dann sei dabei und tauche ein in die zauberhafte Welt des Bauchtanzes.',
                'active' => false,
                'beginning' => '2020-07-06 09:30:00',
                'end' => '2020-07-06 12:00:00',
                'min_participants' => 5,
                'max_participants' => 14,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ],
            [
                'title' => 'Tanzen wie in 1001 Nacht Mittelstufe',
                'description' => 'Der orientalische Tanz ist ein mehrere hundert Jahre alter Tanzstil. Ursprünglich ist er in Ägypten entstanden und mittlerweile fast auf der ganzen Welt bekannt. Hast du Spass daran, dich zu bewegen? Und willst du mal einen "Klimpergürtel" und den Schleiertanz mit farbenfrohen Tüchern auszuprobieren? Dann sei dabei und tauche ein in die zauberhafte Welt des Bauchtanzes.',
                'active' => false,
                'beginning' => '2020-07-06 14:00:00',
                'end' => '2020-07-06 16:30:00',
                'min_participants' => 5,
                'max_participants' => 14,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ]
        ]);

        // Woche 1: Dienstag 07.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Abstrakte Kunst',
                'description' => 'Abstrakte Kunst ist eine Sammelbezeichnung für eine eigene Kunstrichtungen des 20. Jahrhunderts. Gemeinsam entfernen wir uns von der realen Welt und erschaffen ein einzigartiges Kunstwerk mit Hilfe von verschiedenen Maltechniken.',
                'active' => true,
                'beginning' => '2020-07-07 14:00:00',
                'end' => '2020-07-07 16:30:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 8
            ],
            [
                'title' => 'Auf dem Ponyhof Mittelstufe',
                'description' => 'Bist du ein totaler Pferdenarr? Dann darfst du diesen Kurs auf keinen Fall verpassen! Aber auch, wenn du noch nie auf einem Ponyhof warst, kannst du in diesem Kurs Stallluft schnuppern. Gemeinsam verbringen wir den Morgen mit den süssen Vierbeinern. Wir lernen, wie man ein Pony striegelt, führt und verstehen kann. Das Highlight ist der geführte Hindernisparcours, bei dem auch unerfahrene ReiterInnen auf ihre Kosten kommen. Auf die Pferde, fertig, los!',
                'active' => true,
                'beginning' => '2020-07-07 08:15:00',
                'end' => '2020-07-07 12:23:00',
                'min_participants' => 5,
                'max_participants' => 16,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => '(Velo)helm, lange Hosen, gutes Schuhwerk, bis 70 kg',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 20
            ],
            [
                'title' => 'Auf dem Ponyhof Unterstufe',
                'description' => 'Bist du ein totaler Pferdenarr? Dann darfst du diesen Kurs auf keinen Fall verpassen! Aber auch, wenn du noch nie auf einem Ponyhof warst, kannst du in diesem Kurs Stallluft schnuppern. Gemeinsam verbringen wir den Morgen mit den süssen Vierbeinern. Wir lernen, wie man ein Pony striegelt, führt und verstehen kann. Das Highlight ist der geführte Hindernisparcours, bei dem auch unerfahrene ReiterInnen auf ihre Kosten kommen. Auf die Pferde, fertig, los!',
                'active' => true,
                'beginning' => '2020-07-07 13:15:00',
                'end' => '2020-07-07 17:27:00',
                'min_participants' => 5,
                'max_participants' => 16,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => '(Velo)helm, lange Hosen, gutes Schuhwerk, bis 70 kg',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 20
            ],
            [
                'title' => 'DIY Kaleidoskop',
                'description' => 'Das Wort Kaleidoskop bedeutet «schöne Formen sehen» und war ursprünglich schon den alten Griechen bekannt. Mit Aluminiumfolie und Kartonrollen basteln wir eine Zauberwelt. Gestalte dein ganz eigenes Kaleidoskop und blicke durch die faszinierenden Muster.',
                'active' => true,
                'beginning' => '2020-07-07 09:30:00',
                'end' => '2020-07-07 12:00:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => 'Haushaltspapierrolle',
                'price' => 8
            ],
        ]);

        // Woche 1: Mittwoch 08.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Auf in den Untergrund!',
                'description' => 'Was hat es eigentlich unter den Strassen von Wil? Weisst du schon von den Tunneln die unsere Stadt sauber halten? Du hast mit uns die einmalige Chance unter fachkundiger Führung in die Kanäle hinabzusteigen und spannende Orte zu entdecken.',
                'active' => true,
                'beginning' => '2020-07-08 14:00:00',
                'end' => '2020-07-08 16:00:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => '',
                'price' => 0
            ],
            [
                'title' => 'Auf leisen Sohlen',
                'description' => 'Barfuss laufen ist extrem gesund und ausserdem macht es wahnsinnig viel Spass! Wir werden aber nicht auf spitzen Steinen laufen, sondern wir erspüren verschiedene natürliche Unterlagen. Über Mittag werden wir zusammen grillieren.\n\nDurchführung nur bei gutem Wetter.\nWetter-Hotline ab 18:00 Uhr am Vortag auf www.ferienspasswil.ch',
                'active' => true,
                'beginning' => '2020-07-08 09:15:00',
                'end' => '2020-07-08 16:22:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Wettertaugliche Kleidung, Sonnenschutz, Mückenschutz',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Zmittag (Wurst)',
                'price' => 18
            ],
            [
                'title' => 'Sing a Song - Mittelstufe',
                'description' => 'Mach dich fit für die Showbühne. Ob im Chor, Duett oder alleine, hier ist alles erlaubt. Gecoacht werdet ihr von einer professionellen Sängerin und Gesangslehrerin. Denk immer daran: Singen tut man mit dem Herzen und nicht mit dem Verstand!',
                'active' => false,
                'beginning' => '2020-07-08 09:15:00',
                'end' => '2020-07-08 16:22:00',
                'min_participants' => 5,
                'max_participants' => 22,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ],
            [
                'title' => 'Sing a Song - Unterstufe',
                'description' => 'Mach dich fit für die Showbühne. Ob im Chor, Duett oder alleine, hier ist alles erlaubt. Gecoacht werdet ihr von einer professionellen Sängerin und Gesangslehrerin. Denk immer daran: Singen tut man mit dem Herzen und nicht mit dem Verstand!',
                'active' => true,
                'beginning' => '2020-07-08 14:00:00',
                'end' => '2020-07-08 16:30:00',
                'min_participants' => 5,
                'max_participants' => 22,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ],
        ]);

        // Woche 1: Donnerstag 09.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Besuch im Tierheim',
                'description' => 'Wir wagen es und stellen Papier für einmal selber her. Natürlich vergessen wir dabei auch die Umwelt nicht. Wir recyclen altes Papier und stellen daraus "neues" und schön verziertes (Brief-) Papier her. Sei dabei und staune, wie einfach man aus Altpapier Neues entstehen lassen kann.',
                'active' => true,
                'beginning' => '2020-07-09 12:05:00',
                'end' => '2020-07-09 18:25:00',
                'min_participants' => 5,
                'max_participants' => 20,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Avec, Bahnhof Wil',
                'clothes' => 'Wettertaugliche Kleidung (umbedingt warme Kleidung bei schlechtem Wetter), Schutzmaske!',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Sonnenschutz, Schutzmaske!',
                'price' => 25
            ],
            [
                'title' => '(Brief-) Papier DIY',
                'description' => 'Wir wagen es und stellen Papier für einmal selber her. Natürlich vergessen wir dabei auch die Umwelt nicht. Wir recyclen altes Papier und stellen daraus "neues" und schön verziertes (Brief-) Papier her. Sei dabei und staune, wie einfach man aus Altpapier Neues entstehen lassen kann.',
                'active' => true,
                'beginning' => '2020-07-09 09:30:00',
                'end' => '2020-07-09 12:00:00',
                'min_participants' => 5,
                'max_participants' => 17,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 5
            ],
            [
                'title' => 'Mach deine Bratwurst!',
                'description' => 'Im Sommer eine feine Bratwust geniessen die du selber hergestellt hast? Das ist bei uns möglich! Du bekommst die Gelegenheit, die Micarna in Bazenheid zu entdecken und zum Schluss sogar noch deine eigene Bratwurst herzustellen, die du natürlich nach Hause nehmen darfst.\n\nFür Zwischenverpflegung ist gesorgt.',
                'active' => false,
                'beginning' => '2020-07-09 08:00:00',
                'end' => '2020-07-09 12:30:00',
                'min_participants' => 5,
                'max_participants' => 10,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Rutschfeste Schuhe, warme Kleidung, lange Haare zusammenbinden, kein Schmuck (Ohrringe, Ringe, Uhr, Kette, usw.)',
                'bring_alongs' => '',
                'price' => 5
            ],
            [
                'title' => 'Rugby - Alles ums ovale Ei',
                'description' => 'Rugby – Ein Sport für jedes Kind. Erfahre mehr über diesen tollen Sport um den ovalen Ball. Eine Einführung mit zwei Mitgliedern des Rugby Clubs St. Gallen ermöglicht dir ein Kennenlernen und Austoben mit vollem Körpereinsatz.',
                'active' => false,
                'beginning' => '2020-07-09 09:30:00',
                'end' => '2020-07-09 12:00:00',
                'min_participants' => 5,
                'max_participants' => 22,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Reissfeste Sportkleidung, Aussen-Sportschuhe, Sonnenschutz',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 0
            ],
            [
                'title' => 'Shampoo & Dushgel DIY',
                'description' => 'Es gibt nichts Besseres für deine Haut als natürliche Kosmetika. Deshalb stellen wir Körperseife und Shampoo ohne künstliche Zusatzstoffe her. Du wirst erstaunt sein, wie einfach das ist und wie gut es duftet.',
                'active' => true,
                'beginning' => '2020-07-09 09:30:00',
                'end' => '2020-07-09 12:00:00',
                'min_participants' => 5,
                'max_participants' => 17,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 8
            ],
        ]);

        // Woche 1: Freiatg 10.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Technorama',
                'description' => 'Wir entdecken gemeinsam die faszinierende Welt im Technorama in Winterthur. Dabei begegnen uns Magnetizität, Licht, Wasser, klingendes Holz, Elektrizität und vieles mehr. Lass uns experimentieren.',
                'active' => true,
                'beginning' => '2020-07-10 08:30:00',
                'end' => '2020-07-10 16:55:00',
                'min_participants' => 5,
                'max_participants' => 27,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => '',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Lunch',
                'price' => 25
            ],
            [
                'title' => 'Trampolino',
                'description' => 'Auf und Ab und Auf und Ab. Dazwischen vielleicht mal ein Salto oder ein gewagter Sprung? Du kannst alles ausprobieren, denn die Matten fangen dich auf. Wir verbringen den ganzen Nachmittag mit Hüpfen und Springen im RLZ.',
                'active' => true,
                'beginning' => '2020-07-10 08:30:00',
                'end' => '2020-07-10 16:55:00',
                'min_participants' => 5,
                'max_participants' => 17,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'RLZ, Toggenburgerstr. 99, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 5
            ],
            [
                'title' => 'Wildkräuter - Workshop',
                'description' => 'Durch wilde Wiesen streifen, den Geruch der Kräuter einfangen und unsere heimischen Pflanzen näher kennenlernen. Lass dich überraschen, was sich in unseren nahgelegenen Wiesen verbirgt und kreiere zum Abschluss ein Kräutersalz zum nach Hause nehmen.',
                'active' => true,
                'beginning' => '2020-07-10 09:00:00',
                'end' => '2020-07-10 12:00:00',
                'min_participants' => 5,
                'max_participants' => 11,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'RLZ, Toggenburgerstr. 99, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 12
            ],
        ]);

        // Woche 2: Montag 13.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Comic zeichnen',
                'description' => 'Comics prägen seit vielen Jahren junge und erwachsene Menschen. Es gibt sie in Büchern, Zeitschriften oder Zeitungen. Hast du Lust in die Comicwelt einzutauchen und zu lernen, wie man diese zeichnet? Dann bist du hier genau richtig!\n\nDies ist ein ganztägiges Kursangebot ohne Mittagsbetreuung, 09:00 Uhr bis 12:00 Uhr und 14:00 Uhr bis 17:00 Uhr.',
                'active' => true,
                'beginning' => '2020-07-13 09:00:00',
                'end' => '2020-07-13 17:00:00',
                'min_participants' => 5,
                'max_participants' => 22,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => '',
                'price' => 18
            ],
            [
                'title' => 'Geschichte zum Mitnehmen',
                'description' => 'Ein spannender Krimi, eine Fantasy-Story oder eine Abenteuergeschichte – in diesem Workshop ist alles möglich. Ihr schreibt eure eigene Geschichte und macht daraus ein eigenes Hörspiel. Gemeinsam entwickeln wir die verschiedenen Rollen und wählen die Geräusche, die es für die Geschichte braucht.',
                'active' => true,
                'beginning' => '2020-07-13 09:00:00',
                'end' => '2020-07-13 12:00:00',
                'min_participants' => 3,
                'max_participants' => 6,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'USB - Stick',
                'price' => 0
            ],
            [
                'title' => 'Glacé - Himmel',
                'description' => 'Willkommen im Glacé-Himmel!\nMit frischen Zutaten kreieren wir zusammen leckere Glacé-Variationen, die uns den Sommertag versüssen. Mit der Glacémaschine zaubern wir in kürzester Zeit zartschmelzende Glacésorten, die wir anschliessend natürlich selber noch geniessen.',
                'active' => true,
                'beginning' => '2020-07-13 14:00:00',
                'end' => '2020-07-13 16:30:00',
                'min_participants' => 5,
                'max_participants' => 11,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Zeughausareal Eingang, Thuraustrasse 30, 9500 Wil ',
                'clothes' => '',
                'bring_alongs' => 'Kochschürze',
                'price' => 5
            ],
            [
                'title' => 'Kinderyoga (Mittelstufe)',
                'description' => 'Im Vordergrund des Kinderyogas stehen das spielerische Lernen mit viel Freude und Fantasie, sowie der Wechsel von Bewegung und Ruhe. Das wirkt ausgleichend und fördert die Aufmerksamkeit und die Kreativität. Sei dabei und mach mit.',
                'active' => false,
                'beginning' => '2020-07-13 11:00:00',
                'end' => '2020-07-13 12:00:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Bequeme Kleidung',
                'bring_alongs' => 'Handtuch, falls vorhanden Yogamatte',
                'price' => 5
            ],
            [
                'title' => 'Kinderyoga (Unterstufe)',
                'description' => 'Im Vordergrund des Kinderyogas stehen das spielerische Lernen mit viel Freude und Fantasie, sowie der Wechsel von Bewegung und Ruhe. Das wirkt ausgleichend und fördert die Aufmerksamkeit und die Kreativität. Sei dabei und mach mit.',
                'active' => true,
                'beginning' => '2020-07-13 09:30:00',
                'end' => '2020-07-13 10:30:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Bequeme Kleidung',
                'bring_alongs' => 'Handtuch, falls vorhanden Yogamatte',
                'price' => 5
            ],
            [
                'title' => 'Tauschen macht Freude',
                'description' => 'Warst du schon einmal auf einem Flohmarkt? Dort wird getauscht und gehandelt. Wichtig ist, dass die Gegenstände in einem guten und sauberen Zustand sind. Zu diesen Gegenständen gehören Kleider, Bücher, Spiele und Accessoires. Das spezielle an unserem Flohmarkt ist, dass wir nicht mit Geld handeln, sondern unsere Waren gegenseitig fair tauschen. Garantiert ist, dass wir jede Menge Freude an alt-neuen Sachen haben werden. Liegengebliebene Sachen werden wir dem Brockenhaus spenden.',
                'active' => false,
                'beginning' => '2020-07-13 14:00:00',
                'end' => '2020-07-13 16:30:00',
                'min_participants' => 5,
                'max_participants' => 28,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => '',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Gegenstände in gutem und sauberem Zustand für einen fairen Flohmarkttausch, Wolldecke oder Tuch',
                'price' => 5
            ],
        ]);

        // Woche 2: Dienstag 14.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Halter aus Stein und Draht',
                'description' => 'Selbstgemachte Kartenhalter aus Steinen & Draht sind eine hübsche Geschenkidee, dienen als individuelle Bilderhalter für Fotos oder sind als Tischkartenhalter ein Blickfang auf dem gedeckten Tisch. Mit etwas Acrylfarbe, Draht und bunten Perlen machen wir daraus hübsche Kartenhalter. Im Anschluss dürft ihr mit einer Sofortbildkamera noch ein paar Bilder schiessen, um die Halter einzuweihen.',
                'active' => true,
                'beginning' => '2020-07-14 14:00:00',
                'end' => '2020-07-14 16:30:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '3-4 handgrosse, flache Steine',
                'price' => 8
            ],
            [
                'title' => 'Mit dem Trottinett den Berg hinunter',
                'description' => 'Fährst du gerne Trottinett? Bist du auch schon einmal den Berg hinuntergefahren? Wir ermöglichen dir, dies zu erleben. Nach einer ca. 2 stündigen Wanderung wagen wir uns auf die Trottinetts und fahren mit diesen in Wildhaus den Berg hinunter.\n\nDurchführung nur bei gutem Wetter. Wetter-Hotline ab 18.00 Uhr am Vortag auf www.ferienspasswil.ch.',
                'active' => true,
                'beginning' => '2020-07-14 08:30:00',
                'end' => '2020-07-14 15:28:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Wettertaugliche Kleidung, festes Schuhwerk (Wanderschuhe)',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Lunch, Velohelm',
                'price' => 25
            ],
            [
                'title' => 'Pulverlackieren in der IGP Stelz',
                'description' => 'An diesem Vormittag führen euch Fachleute der Firma IGP in das Thema Pulverlackieren ein. Dabei werdet ihr selber ein Werkstück beschichten, das ihr im Anschluss mit nach Hause nehmen dürft.',
                'active' => false,
                'beginning' => '2020-07-14 07:50:00',
                'end' => '2020-07-14 11:22:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Avec, Bahnhof Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Sonnenschutz',
                'price' => 5
            ],
            [
                'title' => 'Rosina Wachtmeister Katzen',
                'description' => 'Rosina Wachtmeister ist durch ihre lebensfrohen, ansteckend optimistischen und künstlerischen Arbeiten in aller Welt bekannt. Sie malt und zeichnet, sie erschafft Skulpturen, sie gestaltet, illustriert und schreibt Bücher. Ihr Markenzeichen: Bunte Katzenkunst. Gemeinsam malen wir zauberhafte und bunte Katzen ganz im Stil von Rosina Wachtmeister.',
                'active' => true,
                'beginning' => '2020-07-14 09:30:00',
                'end' => '2020-07-14 12:00:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 5
            ],
        ]);

        // Woche 2: Mittwoch 15.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Bubblesoccer - Fussball mal anders',
                'description' => 'Bubblesoccer ist eine Mischung aus Wrestling und Fussball mit höchstem Spassfaktor. Hier befindest du dich bis zur Hälfte in einer überdimensionalen luftgefüllten „Bubble“. Anders als beim Fussball ist beim Bubblesoccer foulen erlaubt, da durch die Bubble niemand verletzt werden kann. Du wirst es lieben!\n\nDurchführung nur bei gutem Wetter.\nWetter-Hotline ab 18:00 Uhr am Vortag auf www.ferienspasswil.ch',
                'active' => false,
                'beginning' => '2020-07-15 09:30:00',
                'end' => '2020-07-15 12:00:00',
                'min_participants' => 5,
                'max_participants' => 16,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => true,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Sportbekleidung, gutes Schuhwerk, wetterfeste Kleidung',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 5
            ],
            [
                'title' => 'Findest du den Weg aus dem Labyrinth?',
                'description' => 'Stell dir vor du bist umgeben von Mais und musst den Weg hinausfinden. Wir wagen uns in ein Maislabyrinth. Fühlst du dich dieser Aufgabe gewachsen? Meinst du, du findest den richtigen Weg? Getrau dich, diese Herausforderung mit uns zu meistern.\n\nDurchführung nur bei gutem Wetter. Wetter-Hotline ab 18.00 Uhr am Vortag auf www.ferienspasswil.ch.',
                'active' => false,
                'beginning' => '2020-07-15 08:30:00',
                'end' => '2020-07-15 15:57:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => true,
                'grade_group' => 'all',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Wettertaugliche Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Lunch',
                'price' => 20
            ],
            [
                'title' => 'Radiostudio',
                'description' => 'Wie sieht ein Radiostudio von innen aus?\nWas gehört alles dazu, um eine Radiosendung zu kreieren?\nWer sitzt hinter dem Mikrofon?\nDas alles lässt sich bei unserem Besuch durchs toxic.fm Radiostudio in St. Gallen beantworten.\nLass dir diese einmalige Gelegenheit nicht entgehen!',
                'active' => true,
                'beginning' => '2020-07-15 13:20:00',
                'end' => '2020-07-15 17:45:00',
                'min_participants' => 5,
                'max_participants' => 10,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => true,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 15
            ],
            [
                'title' => 'Tonen - ganz kreativ',
                'description' => 'Tobe dich aus und sei kreativ, denn beim Tonen gibt es fast keine Grenzen. Wir arbeiten mit einem Soft-Ton, sodass wir unsere Kunstwerke nicht brennen müssen und sie an der Luft trocknen können.',
                'active' => true,
                'beginning' => '2020-07-15 09:30:00',
                'end' => '2020-07-15 12:00:00',
                'min_participants' => 5,
                'max_participants' => 20,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 12
            ],
            [
                'title' => 'Vincent van Goghs Sternennacht',
                'description' => 'Vincent van Gogh gilt als einer der Begründer der modernen Malerei. Sternennacht ist eines der bekanntesten Gemälde des niederländischen Künstlers. Das Bild wirkt in seinem Gegenstand, der Farbigkeit und wilden Pinselführung emotional und hat zahlreiche Künstler zu eigenen Variationen des Themas inspiriert. Aus diesem Grund wagen auch wir uns an dieses Meisterwerk und erschaffen unsere eigene Sternennacht.',
                'active' => true,
                'beginning' => '2020-07-15 14:00:00',
                'end' => '2020-07-15 16:30:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 8
            ],
        ]);

        // Woche 2: Donnerstag 16.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Claude Monets Seerosen',
                'description' => 'Claude Monet war ein bedeutender französischer Maler, dessen Stilrichtung dem Impressionismus zugeordnet wird. Ein beliebtes und bekanntes Motiv sind seine Seerosen. An dieses Motiv werden wir uns heranwagen und einen eigenen Claude Monet zaubern.',
                'active' => false,
                'beginning' => '2020-07-16 14:00:00',
                'end' => '2020-07-16 16:30:00',
                'min_participants' => 5,
                'max_participants' => 18,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => '',
                'price' => 8
            ],
            [
                'title' => 'Kletterspass im Seilpark',
                'description' => 'Kletterst du gerne über Stock und Stein? Wolltest du schon immer einmal wie ein Äffchen von Baum zu Baum schwingen und die Aussicht aus atemberaubender Höhe bestaunen?\nDann bist du bei diesem Kurs goldrichtig! Wir werden gemeinsam den Seilpark Gründenmoos unsicher machen und uns ausgiebig auf allen Parcouren austoben! Weil so viel Action ganz schön Hunger macht, gönnen wir uns zum Zmittag einen Spaghettiplausch.\n\nDies ist ein ganztägiges Angebot mit Mittagsverpflegung.\nDurchführung nur bei gutem Wetter.\nWetter-Hotline ab 18:00 Uhr am Vortag auf www.ferienspasswil.ch',
                'active' => true,
                'beginning' => '2020-07-16 08:35:00',
                'end' => '2020-07-16 15:42:00',
                'min_participants' => 5,
                'max_participants' => 20,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => 'Sportkleidung, gutes Schuhwerk',
                'bring_alongs' => 'Zwischenverpflegung, Getränk',
                'price' => 8
            ],
            [
                'title' => 'Trickkiste Natur',
                'description' => 'Hast Du Lust die Tricks von Tieren und Pflanzen kennen zulernen? Wir entdecken, wie sich Tiere tarnen oder vor ihrer Giftigkeit warnen. Wir erforschen das Fliegen mit geflügelten Samen oder staunen über Farben und Klänge in der Natur. Am Mittag machen wir ein Feuer und braten Kartoffeln und Bananen direkt in ihrer Schale. Gemeinsam entdecken wir mit Spielen, Experimenten und Geschichten die Tricks der Natur! Kommst du mit?',
                'active' => true,
                'beginning' => '2020-07-16 09:30:00',
                'end' => '2020-07-16 14:30:00',
                'min_participants' => 5,
                'max_participants' => 20,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Parkplatz Friedhof, Eingang Vitaparcours, Wil',
                'clothes' => 'Wettertaugliche Kleidung, lange Hosen, geschlossenes Schuhwerk, Sonnenschutz, Mückenschutz',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Ergänzung zum Mittagsangebot',
                'price' => 0
            ],
        ]);

        // Woche 2: Freitag 17.07.2020
        Course::factory()->createMany([
            [
                'title' => 'Auf Rollen',
                'description' => 'Ob Skates, BMX oder Scooter. Im Skillspark in Winterthur kannst du dich auf Rollen austoben. Um dabei zu sein, brauchst du keine Vorkenntnisse. Wenn auch du Lust hast, dich im Skillspark auszuleben, dann melde dich an!',
                'active' => true,
                'beginning' => '2020-07-17 08:30:00',
                'end' => '2020-07-17 12:25:00',
                'min_participants' => 5,
                'max_participants' => 27,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => true,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Bahnhof Wil, Avec',
                'clothes' => '',
                'bring_alongs' => 'Getränk, Zwischenverpflegung, Velohelm, Scooter oder Skates, Antirutschsocken',
                'price' => 20
            ],
        ]);
    }
}
