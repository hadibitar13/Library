<?php
session_start();
if(!isset($_SESSION["login"]))
header("location:login.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Document</title>
</head>
<body>
    <header>
        <p>HB Book</p>
        
        
        <ul>
        <li ><a id="R" href="home.php">Home</a></li>
            <li><a href="book.php">Some Book</a></li>
            <li><a href="author.php">Author's Book</a></li>
            <li><a href="contact.php">contact</a></li>
            
        </ul>
    </header>

    <section>
        <p>the 4 hour work week</p>
        <img src="photo/4hourworkweek.jpg" width="300px" height="300px">
        
        <pre>
            <h3>book description:</h3> 
            Forget the old concept of retirement and the rest of the deferred-life plan–there is no need to wait and every reason not to,
             especially in unpredictable economic times. Whether your dream is escaping the rat race, experiencing high-end world travel,
             or earning a monthly five-figure income with zero management, The 4-Hour Workweek is the blueprint
        </pre>
    </section>
    <section>
        <p>the power</p>
        <img src="photo/power.jpg"  width="300px" height="300px">
        <pre>
            <h3>book description:</h3>
            In the book that People magazine proclaimed “beguiling” and “fascinating,”
             Robert Greene and Joost Elffers have distilled three thousand years of the history of
              power into 48 essential laws by drawing from the philosophies of Machiavelli,
             Sun Tzu, and Carl Von Clausewitz and also from the lives of figures ranging from Henry Kissinger to P.T. Barnum..
        </pre>
    </section>
    <section>
        <p>think and grow rich</p>
        <img src="photo/grow and think rich.jfif" width="300px" height="300px">
        <pre>
            <h3>book description:</h3>
            the original Think and Grow Rich, published in 1937,
            Hill draws on stories of Andrew Carnegie, Thomas Edison,
            Henry Ford, and other millionaires of his generation to illustrate his principles.
            In the updated version, Arthur R. Pell, Ph.D., a nationally known author, lecturer,
            and consultant in human resources management and an expert in applying Hill's thought,
            deftly interweaves anecdotes of how contemporary millionaires and billionaires, such as Bill Gates,
            Mary Kay Ash, Dave Thomas, and Sir John Templeton, achieved their wealth.
            Outmoded or arcane terminology and examples are faithfully refreshed to preclude any stumbling blocks to a new generation of readers.
            </pre>
    </section>
    <section>
        <p>the charisma myth</p>
        <img src="photo/the charisma.jpg" width="300px" height="300px">
        <pre>
            <h3>book description:</h3>
            The charisma myth is the idea that charisma is a fundamental,
            inborn quality—you either have it (Bill Clinton, Steve Jobs, Oprah) or you don’t. But that’s simply not true,
            as Olivia Fox Cabane reveals. Charismatic behaviors can be learned and perfected by anyone.

            Drawing on techniques she originally developed for Harvard and MIT,
            Cabane breaks charisma down into its components.
            Becoming more charismatic doesn’t mean transforming your fundamental personality.
            It’s about adopting a series of specific practices that fit in with the personality you already have.
            </pre>
    </section>
    <section>
        <p>how to talk</p>
        <img src="photo/how to talk.jpg" width="300px" height="300px">
        <pre>
            <h3>book description:</h3>
            "The lost art of verbal communication may be revitalized by Leil Lowndes.
            " -- Harvey McKay, author of “How to Swim with the Sharks Without Being Eaten Alive”
            What is that magic quality makes some people instantly loved and respected? Everyone wants to be their friend 
            (or, if single, their lover!) In business, they rise swiftly to the top of the corporate ladder.
            What is their "Midas touch?"
            What it boils down to is a more skillful way of dealing with people.
        </pre>
    </section>

    <section>
       <p>كتاب نظرية الفستق</p>
       <img src="photo/الفستق.jpg" width="300px" height="300px">
        <pre>
            <h3>book description:</h3>
            كتب أكثر من 6000 مقال
             وأصدر في عام 1418هـ – 1997م كتاباً بعنوان الزاوية يتضمن 100 مقال من مقالته، كما صدر له كتاب "حول العالم 1" من دار طويق للنشر،
             وينوي إصدار أجزاء جديدة مستقبلاً.
             حيث يحتوي كل كتاب من كتبه "حول العالم" 78 مواضيع مُختلفة، وكل موضوع يحتوي على 7 مقالات تخص الموضوع الأساسي.
             كما له كتاب بعنوان "نظرية الفستق" يحاول الكاتب من خلاله توضيح الأساليب الإيجابية في التفكير والحكم على الأشياء
            ، من خلال استعراض مجموعة من المواقف والقصص الملهمة
        </pre>
    </section>
</body>
</html>