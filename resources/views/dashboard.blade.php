    <x-layout.layout>
    <title class="title is-1">Dashboard</title>
    <h2 class="title is-2">Study And Progress Table</h2>
    <h2 class="title is-3">Dashboard</h2>

    <table class="center">

        <tr>
            <th></th>
            <th> Course</th>
            <th> Assessment</th>
            <th> Credits you can earn<br>(EC)</th>
            <th> Grade</th>
        </tr>
        <tr>
            <td rowspan="3">Year 1</td>
            <td>IT Personality 1</td>
            <td>Portfolio</td>
            <td>2.5</td>
            <td>-</td>
        </tr>

        <tr>
            <td>IT Personality 2</td>
            <td>Portfolio</td>
            <td>2.5</td>
            <td>-</td>
        </tr>

        <tr>
            <td> Personal Professional Development Exploration</td>
            <td>Criterion-referenced assessment</td>
            <td>12.5</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="3">Quarter 1</td>
            <td>Program- and Career Orientation</td>
            <td>Individual process assessment</td>
            <td>2.5</td>
            <td class="passed"></td>
        </tr>
        <tr>
            <td> Computer Science Basics</td>
            <td>Written exam</td>
            <td>5</td>
            <td class="passed"></td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>Case study exam</td>
            <td>5</td>
            <td class="passed"></td>
        </tr>

        <tr>
            <td rowspan="2">Quarter 2</td>
            <td rowspan="2">Object-Oriented Programming</td>
            <td>Presentation (individual)</td>
            <td rowspan="2">10</td>
            <td rowspan="2">-</td>
        </tr>

        <tr>
            <td>Written knowledge test</td>
        </tr>

        <tr>
            <td rowspan="4">Quarter 3</td>
            <td rowspan="4">Framework Project 1</td>
            <td>Written knowledge test</td>
            <td rowspan="4">10</td>
            <td rowspan="4" class="failed-retake">-</td>
        </tr>
        <tr>
            <td>Written knowledge test</td>
        </tr>
        <tr>
            <td>Assignment (group)</td>
        </tr>
        <tr>
            <td>Assignment (individual)</td>
        </tr>

        <tr>
            <td rowspan="3">Quarter 4</td>
            <td rowspan="3">Framework Project 2</td>
            <td>Portfolio</td>
            <td rowspan="3">10</td>
            <td rowspan="3" class="failed">-</td>
        </tr>
        <tr>
            <td>Portfolio</td>
        </tr>
        <tr>
            <td>Portfolio</td>
        </tr>

        <tr>
            <td>Quarter 3&4</td>
            <td>Business IT Consultancy basics</td>
            <td>Assignment (individual)</td>
            <td>2.5</td>
            <td class="passed">-</td>
        </tr>
    </table>
    <section>
        <label id="prg_lbl">
            <h2>Progress bar</h2>
        </label>
        <div id="bar">
            <div id="barfill"></div>
            <div id="nbsa"></div>
            <text id="nbsa_mark">NBSA</text>
        </div>
        <text id="ind">0/60 EC</text>
    </section>
    </x-layout.layout>
