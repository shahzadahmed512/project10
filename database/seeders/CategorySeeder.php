<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


// use Illuminate\Database\Seeder;
//use App\Models\User;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Sample categories and subcategories data
        $categories = [
            ['name' => 'Software', 'category_position_id' => 1],
            ['name' => 'Databases', 'category_position_id' => 2],
            ['name' => 'Infrastructure', 'category_position_id' => 3],
            ['name' => 'Security', 'category_position_id' => 4],
            ['name' => 'Data and Analytics', 'category_position_id' => 5],
            ['name' => 'Support and Operations', 'category_position_id' => 6],
              // New category: Machine Learning and AI
            ['name' => 'Machine Learning and AI', 'category_position_id' => 7],
            
            // New category: Web Services
            ['name' => 'Web Services', 'category_position_id' => 8],
            
            // New category: Version Control
            ['name' => 'Version Control', 'category_position_id' => 9],
            
            // New category: Testing and Quality Assurance
            ['name' => 'Testing and Quality Assurance', 'category_position_id' => 10],
            
            // New category: UI/UX Design
            ['name' => 'UI/UX Design', 'category_position_id' => 11],
            
            // New category: Project Management
            ['name' => 'Project Management', 'category_position_id' => 12],
            
            // New category: Cloud Technologies
            ['name' => 'Cloud Technologies', 'category_position_id' => 13],
            
            // New category: Internet of Things (IoT)
            ['name' => 'Internet of Things (IoT)', 'category_position_id' => 14],
            
        ];

                // Sample subcategories
        $subcategories = [
            // Software
            ['category_id' => 1, 'name' => 'Programming Languages', 'subcategory_position_id' => 1],
            ['category_id' => 1, 'name' => 'Web Development Frameworks', 'subcategory_position_id' => 2],
            ['category_id' => 1, 'name' => 'Mobile App Development', 'subcategory_position_id' => 3],
            
            // Infrastructure
            ['category_id' => 2, 'name' => 'Networking', 'subcategory_position_id' => 4],
            ['category_id' => 2, 'name' => 'Cloud Services', 'subcategory_position_id' => 5],
            ['category_id' => 2, 'name' => 'Virtualization', 'subcategory_position_id' => 6],
            
            // Security
            ['category_id' => 3, 'name' => 'Network Security', 'subcategory_position_id' => 7],
            ['category_id' => 3, 'name' => 'Cybersecurity', 'subcategory_position_id' => 8],
            ['category_id' => 3, 'name' => 'Data Privacy', 'subcategory_position_id' => 9],
            
            // Data and Analytics
            ['category_id' => 4, 'name' => 'Databases', 'subcategory_position_id' => 10],
            ['category_id' => 4, 'name' => 'Business Intelligence', 'subcategory_position_id' => 11],
            ['category_id' => 4, 'name' => 'Data Science', 'subcategory_position_id' => 12],
            
            // Support and Operations
            ['category_id' => 5, 'name' => 'IT Helpdesk', 'subcategory_position_id' => 13],
            ['category_id' => 5, 'name' => 'System Administration', 'subcategory_position_id' => 14],
            ['category_id' => 5, 'name' => 'DevOps', 'subcategory_position_id' => 15],
            
            // Programming Languages
            ['category_id' => 1, 'name' => 'Python', 'subcategory_position_id' => 16],
            ['category_id' => 1, 'name' => 'Java', 'subcategory_position_id' => 17],
            ['category_id' => 1, 'name' => 'PHP', 'subcategory_position_id' => 18],
            ['category_id' => 1, 'name' => 'Ruby', 'subcategory_position_id' => 19],
            ['category_id' => 1, 'name' => 'C#', 'subcategory_position_id' => 20],
            ['category_id' => 1, 'name' => 'C++', 'subcategory_position_id' => 21],
            ['category_id' => 1, 'name' => 'JavaScript', 'subcategory_position_id' => 22],
            // ... Add more programming languages
            
            // Additional Subcategories (non-programming)
            ['category_id' => 1, 'name' => 'AI and Machine Learning', 'subcategory_position_id' => 50],
            ['category_id' => 1, 'name' => 'Blockchain', 'subcategory_position_id' => 51],
            
             // Databases
            ['category_id' => 6, 'name' => 'SQL Databases', 'subcategory_position_id' => 23],
            ['category_id' => 6, 'name' => 'NoSQL Databases', 'subcategory_position_id' => 24],
            ['category_id' => 6, 'name' => 'NewSQL Databases', 'subcategory_position_id' => 25],
            ['category_id' => 6, 'name' => 'Graph Databases', 'subcategory_position_id' => 26],
            // ... Add more database subcategories

            // Machine Learning and AI
            ['category_id' => 7, 'name' => 'Machine Learning', 'subcategory_position_id' => 25],
            ['category_id' => 7, 'name' => 'Deep Learning', 'subcategory_position_id' => 26],
            // ... Add more ML and AI subcategories
            
            // Web Services
            ['category_id' => 8, 'name' => 'RESTful APIs', 'subcategory_position_id' => 27],
            ['category_id' => 8, 'name' => 'SOAP APIs', 'subcategory_position_id' => 28],
            // ... Add more web service subcategories
            
            // Version Control
            ['category_id' => 9, 'name' => 'Git', 'subcategory_position_id' => 29],
            ['category_id' => 9, 'name' => 'SVN (Subversion)', 'subcategory_position_id' => 30],
            // ... Add more version control subcategories
            
            // Testing and Quality Assurance
            ['category_id' => 10, 'name' => 'Automated Testing', 'subcategory_position_id' => 31],
            ['category_id' => 10, 'name' => 'Manual Testing', 'subcategory_position_id' => 32],
            // ... Add more testing and QA subcategories
            
            // UI/UX Design
            ['category_id' => 11, 'name' => 'User Interface (UI) Design', 'subcategory_position_id' => 33],
            ['category_id' => 11, 'name' => 'User Experience (UX) Design', 'subcategory_position_id' => 34],
            // ... Add more UI/UX subcategories
            
            // Project Management
            ['category_id' => 12, 'name' => 'Agile Methodologies', 'subcategory_position_id' => 35],
            ['category_id' => 12, 'name' => 'Scrum', 'subcategory_position_id' => 36],
            // ... Add more project management subcategories
            
            // Cloud Technologies
            ['category_id' => 13, 'name' => 'Serverless Computing', 'subcategory_position_id' => 37],
            ['category_id' => 13, 'name' => 'Containers (Docker)', 'subcategory_position_id' => 38],
            // ... Add more cloud technology subcategories
            
            // Internet of Things (IoT)
            ['category_id' => 14, 'name' => 'Embedded Systems', 'subcategory_position_id' => 39],
            ['category_id' => 14, 'name' => 'IoT Protocols', 'subcategory_position_id' => 40],
    // ... Add more IoT subcategories
            // ... Add more non-programming subcategories
        ];

        // Insert categories
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }

        // Insert subcategories
        foreach ($subcategories as $subcategory) {
            DB::table('subcategories')->insert($subcategory);
        }
    }
}
