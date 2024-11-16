<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Rating</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        .star-rating {
            display: flex;
            gap: 5px;
            font-size: 2em;
            cursor: pointer;
        }

        .star {
            color: lightgray;
            transition: color 0.2s;
        }

        .star:hover,
        .star.hovered {
            color: gold;
        }

        .star.selected {
            color: gold;
        }

        #selected-rating {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
    <div class="star-rating">
        <span class="star" data-value="0" data-text="Very dissatisfied - 0">★</span>
        <span class="star" data-value="1" data-text="Dissatisfied - 1">★</span>
        <span class="star" data-value="2" data-text="Neutral - 2">★</span>
        <span class="star" data-value="5" data-text="Satisfied - 5">★</span>
        <span class="star" data-value="10" data-text="Very satisfied - 10">★</span>
    </div>
    <div id="selected-rating">Select a rating</div>

    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stars = document.querySelectorAll('.star');
            const ratingDisplay = document.getElementById('selected-rating');

            stars.forEach((star, index) => {
                star.addEventListener('mouseover', () => {
                    clearHover();
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.add('hovered');
                    }
                });

                star.addEventListener('mouseout', () => {
                    clearHover();
                });

                star.addEventListener('click', () => {
                    clearSelection();
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.add('selected');
                    }
                    ratingDisplay.innerText = `You selected: ${star.getAttribute('data-text')}`;
                });
            });

            function clearHover() {
                stars.forEach(star => star.classList.remove('hovered'));
            }

            function clearSelection() {
                stars.forEach(star => star.classList.remove('selected'));
            }
        });

    </script>
</body>

</html>


