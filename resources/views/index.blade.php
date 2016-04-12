@extends('layouts.app')

@section('content')
    <div class="content">
            <h1>Laravel 5.1 Beauty - Starting the Admin Area</h1>
            <div class="info">
                Elliot Forbes | 29th March 2015 | 3 Comments | Tags: Laravel, Authentication, Golang
            </div>
            One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.

            To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!
            
            <pre><code class="language-java">package main

import (
    "fmt"
)

var toBeSorted [10]int = [10]int{1,3,2,4,8,6,7,2,3,0}

func bubbleSort(input [10]int) {
    n := 10
    swapped := true
    for swapped {
        swapped = false
        for i := 1; i < n-1; i++ {
            if input[i-1] > input[i] {
                fmt.Println("Swapping")
                // swap values using Go's tuple assignment
                input[i], input[i-1] = input[i-1], input[i]
                swapped = true
            }
        }
    }
    fmt.Println(input)
}


func main() {
    fmt.Println("Hello World")
    bubbleSort(toBeSorted)
    
}</code></pre>
            One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens. To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!
            <h2>The HTML Code</h2>
            <p>One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens. To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!</p>
            
            <div class="tip">
                <span class="large">Tip! - Check the Docs</span>
                <p>The documentation contains some great info on the routing systems that Laravel 5 has to offer.</p>
            </div>
            <p>One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens. To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!</p>
            <h4>Some Table with Useless Info</h4>
            <table class="striped">
                <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                </tr>
                </tbody>
            </table>
            
            <pre>
        </div>
        
        <div class="comment-container">
            <div class="comments">
                
                <div class="comment">
                    <div class="icon">
                        E
                    </div>
                    <h5>
                        <a href="#">Elliot</a>
                        <span class="time-since">
                            - 3 Hours Ago
                        </span>
                    </h5>
                    <p>One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens. To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!</p>
                    <div class="clear"></div>
                </div>
                
                <div class="comment">
                    <div class="icon">
                        E
                    </div>
                    <h5>
                        <a href="#">Elliot</a>
                        <span class="time-since">
                            - 3 Hours Ago
                        </span>
                    </h5>
                    <p>I agree</p>
                    <div class="clear"></div>
                </div>
             
            </div>
            <div class="clear"></div>
        </div>
@endsection