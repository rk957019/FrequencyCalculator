# FrequencyCalculator
This project contains two files home.html and frequency.php.

Home.html contains a form table which accpets a number(>=1) and redirect to frequency.php after clicking  submit button.

Frequency.php reads fetch data from https://terriblytinytales.com/test.txt through file_get_contents function and generate array containing all words separated by white spaces. Then it calculates frequency of each word. It generates an associative array whose key contains word and value contains frequency. After sorting this associative array in descending order according to value it prints first N entries.

Screenshots are attached.
