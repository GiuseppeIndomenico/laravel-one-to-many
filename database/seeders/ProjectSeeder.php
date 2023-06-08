<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var string[][] $projects */
        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'Build a fully functional e-commerce website with shopping cart and payment integration.',
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Develop a cross-platform mobile app using React Native for iOS and Android devices.',
            ],
            [
                'title' => 'Data Analytics Dashboard',
                'description' => 'Create an interactive data analytics dashboard to visualize and analyze complex data sets.',
            ],
            [
                'title' => 'Social Media Marketing Campaign',
                'description' => 'Plan and execute a social media marketing campaign to increase brand awareness and engagement.',
            ],
            [
                'title' => 'Custom Web Application',
                'description' => 'Build a custom web application tailored to the client\'s specific requirements.',
            ],
            [
                'title' => 'UI/UX Design for Mobile App',
                'description' => 'Design intuitive and visually appealing user interfaces for a mobile app.',
            ],
            [
                'title' => 'Database Optimization',
                'description' => 'Optimize the performance and efficiency of a large-scale database system.',
            ],
            [
                'title' => 'Content Management System',
                'description' => 'Develop a user-friendly CMS for managing website content.',
            ],
            [
                'title' => 'SEO Audit and Optimization',
                'description' => 'Conduct a comprehensive SEO audit and implement optimization strategies for improved search engine rankings.',
            ],
            [
                'title' => 'Cybersecurity Consulting',
                'description' => 'Provide expert cybersecurity consulting services to protect sensitive data and mitigate risks.',
            ],
        ];


        foreach ($projects as $projectData) {
            $slug = Str::slug($projectData['title'], '-');
            $projectData['slug'] = $slug;
            Project::create($projectData);
        }
    }
}