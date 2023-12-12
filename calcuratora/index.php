<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #333;
            border-radius: 10px;
            width: 320px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .display {
            background-color: #fff;
            color: #333;
            border-radius: 5px;
            padding: 10px;
            text-align: right;
            font-size: 24px;
        }
        .buttons {
            margin-top: 10px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }
        .button {
            background-color: #f4f4f4;
            border: none;
            border-radius: 5px;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div class="display" id="display">0</div>
        <div class="buttons">
        <button class="button" onclick="clearDisplay()">apaga</button>
            <button class="button" onclick="appendCharacter('7')">7</button>
            <button class="button" onclick="appendCharacter('8')">8</button>
            <button class="button" onclick="appendCharacter('9')">9</button>
            <button class="button" onclick="appendCharacter('/')">/</button>
            <button class="button" onclick="appendCharacter('4')">4</button>
            <button class="button" onclick="appendCharacter('5')">5</button>
            <button class="button" onclick="appendCharacter('6')">6</button>
            <button class="button" onclick="appendCharacter('*')">*</button>
            <button class="button" onclick="appendCharacter('1')">1</button>
            <button class="button" onclick="appendCharacter('2')">2</button>
            <button class="button" onclick="appendCharacter('3')">3</button>
            <button class="button" onclick="appendCharacter('-')">-</button>
            <button class="button" onclick="appendCharacter('0')">0</button>
            <button class="button" onclick="appendCharacter('.')">.</button>
            <button class="button" onclick="appendCharacter('+')">+</button>
            <button class="button" onclick="calculateResult('=')">=</button>

        </div>
    </div>

    <script>
        let currentDisplay = '0';

        function updateDisplay() {
            document.getElementById('display').textContent = currentDisplay;
        }

        function appendCharacter(char) {
            if (currentDisplay === '0') {
                currentDisplay = char;
            } else {
                currentDisplay += char;
            }
            updateDisplay();
        }

        function clearDisplay() {
            currentDisplay = '0';
            updateDisplay();
        }

        function calculateResult() {
            try {
                currentDisplay = eval(currentDisplay);
            } catch (error) {
                currentDisplay = 'Error';
            }
            updateDisplay();
        }
    </script>
</body>
</html>