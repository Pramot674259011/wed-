<?php
// Test script to verify that site_content.json can be read correctly

echo "Testing site_content.json access...\n";

// Check if the file exists
if (file_exists('storage/app/site_content.json')) {
    echo "✓ site_content.json file exists\n";
    
    // Try to read the file
    $content = file_get_contents('storage/app/site_content.json');
    if ($content) {
        echo "✓ File content can be read\n";
        
        // Try to decode JSON
        $data = json_decode($content, true);
        if ($data) {
            echo "✓ JSON content is valid\n";
            echo "Site title: " . ($data['site_title'] ?? 'Not found') . "\n";
            echo "Number of cards: " . count($data['cards'] ?? []) . "\n";
        } else {
            echo "✗ JSON content is invalid\n";
        }
    } else {
        echo "✗ Cannot read file content\n";
    }
} else {
    echo "✗ site_content.json file does not exist\n";
}

echo "\nTesting storage link...\n";

// Check if storage link exists (Windows compatible check)
if (is_dir('public/storage')) {
    // Try to determine if it's a symbolic link on Windows
    $output = shell_exec('powershell "Get-Item public\storage | Select-Object Name, Target"');
    if (strpos($output, 'Target') !== false) {
        echo "✓ Storage link exists\n";
        echo "Storage link info:\n$output\n";
    } else {
        echo "✓ Storage directory exists (but may not be a symbolic link)\n";
    }
} else {
    echo "✗ Storage link does not exist\n";
}

echo "\nTest completed.\n";
?>