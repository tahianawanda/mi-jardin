<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Family;
use App\Models\Genre;
use App\Models\Specie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categories
        $nonVascularCategory = Category::create(['name' => 'Non-Vasculares', 'created_at' => now(), 'updated_at' => now()]);
        $vascularCategory = Category::create(['name' => 'Vasculares', 'created_at' => now(), 'updated_at' => now()]);

        // Subcategories and asign a Categories
        $seedlessVascularSubcategory = Subcategory::create([
            'name' => 'Seedless-vasculars',
            'category_id' => $vascularCategory->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $seedSubcategory = Subcategory::create([
            'name' => 'Seed',
            'category_id' => $vascularCategory->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create Families and asign a Subcategories
        $families = [
            ['name' => 'Polypodiaceae', 'subcategory_id' => $seedlessVascularSubcategory->id],
            ['name' => 'Equisetaceae', 'subcategory_id' => $seedlessVascularSubcategory->id],
            ['name' => 'Lycopodiaceae', 'subcategory_id' => $seedlessVascularSubcategory->id],
            ['name' => 'Selaginellaceae', 'subcategory_id' => $seedlessVascularSubcategory->id],
            ['name' => 'Pinaceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Cupressaceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Ginkgoaceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Cycadaceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Rosaceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Moraceae', 'subcategory_id' => $seedSubcategory->id],
            ['name' => 'Dennstaedtiaceae', 'subcategory_id' => $seedSubcategory->id],
        ];

        foreach ($families as $familyData) {
            Family::create(array_merge($familyData, ['created_at' => now(), 'updated_at' => now()]));
        }

        // Create Genre and asign a Families
        $genres = [
            ['name' => 'Rosa', 'family_id' => Family::where('name', 'Rosaceae')->first()->id],
            ['name' => 'Ficus', 'family_id' => Family::where('name', 'Moraceae')->first()->id],
            ['name' => 'Pinus', 'family_id' => Family::where('name', 'Pinaceae')->first()->id],
            ['name' => 'Pteridium', 'family_id' => Family::where('name', 'Dennstaedtiaceae')->first()->id],
            ['name' => 'Equisetum', 'family_id' => Family::where('name', 'Equisetaceae')->first()->id],
        ];

        foreach ($genres as $genreData) {
            Genre::create(array_merge($genreData, ['created_at' => now(), 'updated_at' => now()]));
        }

        // Create Species and asign a Génres
        $species = [
            ['name' => 'Pteridium aquilinum', 'genre_id' => Genre::where('name', 'Pteridium')->first()->id],
            ['name' => 'Equisetum arvense', 'genre_id' => Genre::where('name', 'Equisetum')->first()->id],
        ];

        foreach ($species as $specieData) {
            Specie::create(array_merge($specieData, ['created_at' => now(), 'updated_at' => now()]));
        }
    }
}
