<?php

$site_title   = "Assignment #1";
$builder_name = "Jake Morales";
$current_year = date("Y");
$footer_note  = "Tapos na ngani."; 

$bike_model   = "Honda Wave 125 S 2004";
$displacement = "198cc";
$bore_size    = "66mm";
$head_type    = "4-Valve";

$hero_headline = "How to make a perfectly working bike to a not working one"; 

$hero_subtext  = "Building a $displacement engine from $bike_model engine.";

$about_me_text = "Making a working engines into not working ones and I like playing League of Legends even tho I'm bad at it.";

$other_interests_text = "Sleeping.";

$posts = [
    [
        "category" => "Carburetor",
        "color"    => "red",
        "date"     => "Jan 15, 2026",
        "title"    => "Unable to tune",
        "content"  => "Switched to the 26mm round slide carb thinking it would stabilize the idle, but hit a massive flat spot immediately off idle.",
        "fix"      => "There was an air leak in the manifold fixing it makes it tuneable."
    ],
    [
        "category" => "Fuel System",
        "color"    => "amber",
        "date"     => "Jan 10, 2026",
        "title"    => "Constant Overflow",
        "content"  => "The 24mm Kenada KND-ZSON flat slide was a nightmare. Fuel kept pouring out of the overflow tube.",
        "fix"      => "Swap in a bigger carburetor from 28-32mm."
    ],
];

$skills = ["Ionic"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$site_title | Build Log"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">

    <nav class="bg-white border-b border-slate-200 shadow-sm sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-slate-900 tracking-tight">
                        <?php 
                        echo 'Break' . '<span class="text-indigo-600">198</span>' . ' BUILD'; 
                        ?>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-sm font-medium text-slate-500 hover:text-indigo-600">Home</a>
                    <a href="#about" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-5xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl">
                    <?php
                    // INTERPOLATION: Variable inside double quotes
                    echo "$hero_headline <span class='text-indigo-600'>$bike_model</span>";
                    ?>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-slate-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    <?php 
                    // Just echoing the variable we made at the top
                    echo $hero_subtext; 
                    ?>
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-8" id="errors">
                <h2 class="text-2xl font-bold text-slate-900 border-b pb-4 mb-6">Recent Tuning Errors & Fixes</h2>

                <?php 
                foreach($posts as $post) {
                    // Extracting array data into easy-to-use variables
                    $cat   = $post['category'];
                    $color = $post['color']; 
                    $date  = $post['date'];
                    $title = $post['title'];
                    $body  = $post['content'];
                    $fix   = $post['fix'];

                    echo '<article class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden hover:shadow-md transition-shadow">';
                        echo '<div class="p-6">';

                            // Interpolation makes this cleaner (variables inside the string)
                            echo "<div class='flex items-center space-x-2 text-xs text-slate-400 mb-3'>";
                                echo "<span class='font-semibold text-{$color}-500 uppercase tracking-wide'>$cat</span>";
                                echo "<span>&bull;</span>";
                                echo "<span>$date</span>";
                            echo "</div>";

                            // Concatenation example (Variable + String)
                            echo '<h3 class="text-xl font-bold text-slate-900 mb-2">' . $title . '</h3>';
                            
                            // Just echoing the content variable
                            echo '<p class="text-slate-600 mb-4">' . $body . '</p>';

                            echo "<div class='bg-slate-50 p-4 rounded-md border-l-4 border-{$color}-400 text-sm'>";
                                echo "<p class='font-semibold text-slate-800'>The Fix:</p>";
                                echo "<p class='text-slate-600'>$fix</p>";
                            echo "</div>";

                        echo '</div>';
                    echo '</article>';
                }
                ?>
            </div>

            <div class="lg:col-span-1 space-y-6" id="about">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-12 w-12 rounded-full bg-slate-200 flex items-center justify-center text-xl">🏍️</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900"><?php echo $builder_name; ?></h3>
                            <p class="text-sm text-slate-500">Student/Siraniko</p>
                        </div>
                    </div>
                    
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $about_me_text; ?>
                    </p>
                    
                    <div class="border-t border-slate-100 pt-4">
                        <h4 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Current Build Specs</h4>
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li class="flex justify-between"><span>Engine:</span> <span class="font-medium"><?php echo $bike_model; ?></span></li>
                            <li class="flex justify-between"><span>Displacement:</span> <span class="font-medium"><?php echo $displacement; ?></span></li>
                            <li class="flex justify-between"><span>Bore:</span> <span class="font-medium"><?php echo $bore_size; ?></span></li>
                            <li class="flex justify-between"><span>Head:</span> <span class="font-medium"><?php echo $head_type; ?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="bg-slate-800 p-6 rounded-lg shadow-sm text-white">
                    <h3 class="text-lg font-bold mb-2">Other Interests</h3>
                    <p class="text-slate-300 text-sm mb-4"><?php echo $other_interests_text; ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php
                        foreach($skills as $skill) {
                            // Concatenation: String + Variable + String
                            echo '<span class="px-2 py-1 bg-slate-700 rounded text-xs">' . $skill . '</span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-slate-200 mt-12">
        <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm text-slate-400">
                &copy; <?php echo $current_year . ' ' . $site_title . '. ' . $footer_note; ?>
            </p>
        </div>
    </footer>

</body>
</html>