<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::find($id);
        return view('animal.show', [
            'animal' => $animal,
        ]);
    }

    public function addMockData()
    {
        if (Animal::count() > 0) {
            return 'Mock data already exists.';
        } else {
            $mockData = [
                [
                    'name' => 'Bella',
                    'species' => 'Chien',
                    'age' => 5,
                    'description' => 'Une labrador joueuse et affectueuse qui adore la compagnie.',
                    'photo' => 'images/animaux/bella.png',
                ],
                [
                    'name' => 'Luna',
                    'species' => 'Chat',
                    'age' => 3,
                    'description' => 'Une chatte calme et câline qui aime les endroits tranquilles.',
                    'photo' => 'images/animaux/luna.png',
                ],
                [
                    'name' => 'Max',
                    'species' => 'Chien',
                    'age' => 2,
                    'description' => 'Un jeune chiot plein d’énergie qui adore courir et jouer dehors.',
                    'photo' => 'images/animaux/max.png',
                ],
                [
                    'name' => 'Coquillette',
                    'species' => 'Chien',
                    'age' => 3,
                    'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
                    'photo' => 'images/animaux/coquillette.png',
                ],
            ];
            foreach ($mockData as $data) {
                Animal::create($data);
            }

            return 'Mock data added successfully.';
        }
    }

    public function addAnimal()
    {
        $animal = new Animal();
        $animal->name = 'Coquillette';
        $animal->species = 'Chien';
        $animal->age = 3;
        $animal->description = 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.';
        $animal->photo = 'images/animaux/coquillette.png';
        $animal->save();

        return redirect()->route('home');
    }

    public function modifyAnimal($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->name = $animal->name . ' (Modifié )';
            $animal->save();
            return redirect()->route('home');
        } else {
            return "Animal with ID {$id} not found.";
        }
    }
    public function deleteAnimal($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
            return redirect()->route('home');
        } else {
            return "Animal with ID {$id} not found.";
        }
    }
}
