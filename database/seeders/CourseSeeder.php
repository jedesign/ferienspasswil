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

        // Woche 1: Montag
        Course::factory()->createMany([
            [
                'title' => 'Fitness im Freien',
                'title_short' => 'Fitness im Freien',
                'description' => 'Um fit zu bleiben, muss man nicht viel Geld bezahlen. Dies geht auch ganz einfach auf der Strasse oder zu Hause. Dabei brauchen wir nichts, ausser unseren Körper. Wir zeigen dir, wie das geht. Falls du selbst Ideen hast, nimm diese einfach mit.',
                'active' => true,
                'beginning' => '2020-07-06 09:30:00',
                'end' => '2020-07-06 12:00:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Wettertaugliche, sportliche Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 0
            ],
            [
                'title' => 'Tanzen wie in 1001 Nacht Unterstufe',
                'title_short' => 'Bauchtanz US',
                'description' => 'Der orientalische Tanz ist ein mehrere hundert Jahre alter Tanzstil. Ursprünglich ist er in Ägypten entstanden und mittlerweile fast auf der ganzen Welt bekannt. Hast du Spass daran, dich zu bewegen? Und willst du mal einen "Klimpergürtel" und den Schleiertanz mit farbenfrohen Tüchern auszuprobieren? Dann sei dabei und tauche ein in die zauberhafte Welt des Bauchtanzes.',
                'active' => false,
                'beginning' => '2020-07-06 09:30:00',
                'end' => '2020-07-06 12:00:00',
                'min_participants' => 3,
                'max_participants' => 8,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ],
            [
                'title' => 'Im Freien spielen',
                'title_short' => 'Im Freien spielen',
                'description' => 'Wir toben uns beim Spielen im Freien aus. Wir machen verschiedene Arten von Fangis, Sitzball oder Versteckis. Dabei geht es uns vor allem um Spass. Damit wir das haben, bringe gute Laune und viel Sonnenschein mit.',
                'active' => true,
                'beginning' => '2020-07-06 14:00:00',
                'end' => '2020-07-06 16:30:00',
                'min_participants' => 10,
                'max_participants' => 20,
                'weather_sensitive' => true,
                'canceled_due_to_weather' => false,
                'grade_group' => 'lower',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Wettertaugliche, sportliche Kleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 0
            ],
            [
                'title' => 'Tanzen wie in 1001 Nacht Mittelstufe',
                'title_short' => 'Bauchtanz MS',
                'description' => 'Der orientalische Tanz ist ein mehrere hundert Jahre alter Tanzstil. Ursprünglich ist er in Ägypten entstanden und mittlerweile fast auf der ganzen Welt bekannt. Hast du Spass daran, dich zu bewegen? Und willst du mal einen "Klimpergürtel" und den Schleiertanz mit farbenfrohen Tüchern auszuprobieren? Dann sei dabei und tauche ein in die zauberhafte Welt des Bauchtanzes.',
                'active' => false,
                'beginning' => '2020-07-06 14:00:00',
                'end' => '2020-07-06 16:30:00',
                'min_participants' => 3,
                'max_participants' => 8,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'intermediate',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Sportkleidung',
                'bring_alongs' => 'Getränk, Zwischenverpflegung',
                'price' => 12
            ]
        ]);

        // Woche 1: Dienstag
        Course::factory()->createMany([
            [
                'title' => 'DIY Kaleidoskop',
                'title_short' => 'Kaleidoskop',
                'description' => 'Das Wort Kaleidoskop bedeutet «schöne Formen sehen» und war ursprünglich schon den alten Griechen bekannt. Mit Aluminiumfolie und Kartonrollen basteln wir eine Zauberwelt. Gestalte dein ganz eigenes Kaleidoskop und blicke durch die faszinierenden Muster.',
                'active' => true,
                'beginning' => '2020-07-07 09:30:00',
                'end' => '2020-07-07 12:00:00',
                'min_participants' => 5,
                'max_participants' => 15,
                'weather_sensitive' => false,
                'canceled_due_to_weather' => false,
                'grade_group' => 'all',
                'meeting_point' => 'Jugendzentrum Obere Mühle, Wil',
                'clothes' => 'Angemessene Kleidung',
                'bring_alongs' => 'Haushaltspapierrolle',
                'price' => 8
            ],
        ]);

        // Woche 1: Mittwoch
        Course::factory()->createMany([
            [
                'title' => 'Auf leisen Sohlen',
                'title_short' => 'Barfussweg',
                'description' => 'Barfuss laufen ist extrem gesund und ausserdem macht es wahnsinnig viel Spass! Wir werden aber nicht auf spitzen Steinen laufen, sondern wir erspüren verschiedene natürliche Unterlagen. Über Mittag werden wir zusammen grillieren. Durchführung nur bei gutem Wetter. Wetter-Hotline ab 18:00 Uhr am Vortag auf www.ferienspasswil.ch',
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
        ]);

        // Woche 2: Mittwoch
        Course::factory()->createMany([
            [
                'title' => 'Findest du den Weg aus dem Labyrinth?',
                'title_short' => 'Maislabyrinth',
                'description' => 'Stell dir vor du bist umgeben von Mais und musst den Weg hinausfinden. Wir wagen uns in ein Maislabyrinth. Fühlst du dich dieser Aufgabe gewachsen? Meinst du, du findest den richtigen Weg? Getrau dich, diese Herausforderung mit uns zu meistern. Durchführung nur bei gutem Wetter. Wetter-Hotline ab 18.00 Uhr am Vortag auf www.ferienspasswil.ch.',
                'active' => true,
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
        ]);
    }
}
