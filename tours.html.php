<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Options</title>
  <meta name="description" content="Portland Historical Tours have offered three family run tours for decades:  the Downtown Tour, the Growth Tour, and the Landmarks Tour.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../project.css">
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">
      <?php include '../includes/header.inc.html.php'; ?>
      <?php include '../includes/navigation.inc.html.php'; ?>
    <main>
      <table>
        <span id="caption">Compare Tour Options</span>
        <tr>
          <th id="tourname">Tour</th>
          <th id="tourduration">Duration</th>
          <th id="transportation">Transportation</th>
          <th id="food">Food</th>
          <th id="price">Price</th>
          <th class="reserve">Reserve</th>
        </tr>
            <?php foreach ($contents as $content): ?>
          <tr>
          <td headers="tourname"><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td headers="tourduration"><?php echo htmlspecialchars($content['duration'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td headers="transportation"><?php echo htmlspecialchars($content['transportation'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td headers="food"><?php echo htmlspecialchars($content['food'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td headers="price"><?php echo htmlspecialchars($content['price'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="reserve"><a href="../reservations/reservations.html.">Reserve</a></td>
          </tr>
            <?php endforeach ?>
      </table>
      <h1>Downtown Tour</h1>
        <img class="image" src="../images/downtowntoursmall.png" alt="Portland Downtown Tour" width="200" height="200">
        <p>Enjoy a walking tour of Portland's days gone by. This walking only tour provides a glimpse into the natural, architectural, and cultural history of downtown Portland. Upon arrival, you will receive a booklet of the 20 locations we will visit throughout this three hour tour. Use this booklet to compare Portland's current landscape with accurate historical context.</p>
          <h2>What's Included?</h2>
            <ul>
              <li>Complimentary tour booklet with Before and After photos and a brief history of each location</li>
              <li>Complimentary water</li>
            </ul>
          <blockquote>"It was amazing to walk around downtown Portland comparing the images in the booklet to the current building or in some cases disappearance of a building." - Emily</blockquote>
        <a href="../reservations/reservations.html" class="reserve"><div>Reserve</div></a>
        <br class="clearright">
      <h1>Growth Tour</h1>
        <img class="image" src="../images/growthtoursmall.png" alt="Reserve Growth Tour" width="200" height="200">
        <p>Want to jump into Portland's rich history of growth? This tour offers an insightful experience, by our very educated tour guides, about the history of Portland's growth. While this tour includes walking and driving most conversations will take place at Deschuttes Brewery over complimentary beer flights and complimentary dining at Portland's oldest restaurant, Huber's.</p>
          <h2>What's Included?</h2>
            <ul>
              <li>Complimentary flight of three Deschutes Brewery beers</li>
              <li>Complimentary tapas style appetizer at Huber's restaurant</li>
            </ul>
          <blockquote>"I moved to Portland a few years ago and learned so much from our funny and informative tour guide on the evolution of Portland as I know it today." - Alex</blockquote>
          <!--<blockquote>"I learned so much that I didn't know about the way that Portland has grown over the years. Thanks!" - Bud</blockquote>-->
        <a href="../reservations/reservations.html" class="reserve"><div>Reserve</div></a>
        <br class="clearright">
      <h1>Landmarks Tour</h1>
        <img class="image" src="../images/landmarkstoursmall.png" alt="Portland Landmarks Tour" width="200" height="200">
        <p>This tour will help you cement your Portland knowledge and cover all of Portland's famous landmarks and must see spots. We use a spacious shuttle bus to travel around Portland's quadrants and famous bridges. When you finish the tour, you can tell everyone that you've seen it all in Portland.</p>
          <h2>What's Included?</h2>
            <ul>
              <li>Complimentary tour booklet with photos and brief descriptions of the locations we visit</li>
              <li>Complimentary local snacks</li>
            </ul>
          <blockquote>"We were only in town for a day and decided to make the most of it with a tour. We covered almost the entire city. I couldn't have done that alone and our tour guide was so fun!" - Beatrix</blockquote>
        <a href="../reservations/reservations.html" class="reserve"><div>Reserve</div></a>
        <br class="clearright">
    </main>
    <footer>
      <div class="footernav">
        <a href="../index.php">Home</a>
        <a href="tours.html">Tours</a>
        <a href="reservations.html">Reservations</a>
        <a href="contact.html">Contact</a>
      </div>
      <p>Copyright &copy; Portland Historical Tours<br>
        <a href="mailto:hello@portlandhistoricaltours.com">hello@portlandhistoricaltours.com</a></p>
    </footer>
  </div>
</body>
</html>