<?php

// safe redirects
@header("Location: http://redirect.pm?id=aa&lt=" . urlencode(htmlspecialchars((string) $_GET['lt'])) . "&sl=" . urlencode('https://www.appaddict.org/signup.php') . "&st=" . urlencode('Create AppAddict ID to skip this'));
/* function getCoinUrl($url) {
  $uuid = "5358240dbbe9d175657755";
  $url = rawurlencode($url);

  $result = file_get_contents("https://coinurl.com/api.php?uuid={$uuid}&url={$url}");

  if ($result == 'error')
  return false;
  else
  return $result;
  }

  require_once 'init.php';

  $API->TPL->assign('pagetitle', $API->LANG->_('Redirecting'));
  $API->TPL->assign('footername', $API->LANG->_('Redirecting'));
  $link_ticket = $API->getval('lt');

  $link_ticket = json_decode(decrypt($link_ticket, $API->CONFIG['REDIRECTOR_SECRET']), true);

  if (!$link_ticket) {

  $rt = $API->getval('rt');

  //var_dump(decrypt($rt, 'AA_REDIRECTOR_fsdfs'));
  $rt = json_decode(decrypt($rt, 'AA_REDIRECTOR_fsdfs'), true);

  if (!$rt)
  $API->error($API->LANG->_('Error'));

  if ($rt['time'] > TIME)
  $API->error($API->LANG->_('Invalid redirection ticket'));

  if ($rt['time'] < TIME - 60)
  $API->error($API->LANG->_('Expired redirection ticket'));

  //die('yay');
  if (!$rt['link'])
  $API->error($API->LANG->_('Error'));
  @header("Location: {$rt['link']}");
  die();
  } else {

  if ($link_ticket['wait']) {
  /* $API->TPL->assign('headeradd', '<link rel="stylesheet" type="text/css" href="./css/reviews.css">');


  $jobs_quotes = array(
  'Remembering that you are going to die is the best way I know to avoid the trap of thinking you have something to lose. You are already naked. There is no reason not to follow your heart.',
  'I think if you do something and it turns out pretty good, then you should go do something else wonderful, not dwell on it for too long. Just figure out what’s next.',
  'When you’re a carpenter making a beautiful chest of drawers, you’re not going to use a piece of plywood on the back, even though it faces the wall and nobody will see it. You’ll know it’s there, so you’re going to use a beautiful piece of wood on the back. For you to sleep well at night, the aesthetic, the quality, has to be carried all the way through.',
  'Things don’t have to change the world to be important.',
  'If you haven’t found it yet, keep looking. Don’t settle. As with all matters of the heart, you’ll know when you find it. And like any great relationship, it just gets better and better as the years roll on.',
  'You can’t connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future. You have to trust in something – your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life.',
  'No one wants to die. Even people who want to go to heaven don’t want to die to get there. And yet death is the destination we all share. No one has ever escaped it. And that is as it should be, because Death is very likely the single best invention of Life. It is Life’s change agent. It clears out the old to make way for the new. Right now the new is you, but someday not too long from now, you will gradually become the old and be cleared away. Sorry to be so dramatic, but it is quite true.',
  'Details matter, it’s worth waiting to get it right.',
  'That’s been one of my mantras — focus and simplicity. Simple can be harder than complex. You have to work hard to get your thinking clean to make it simple. But it’s worth it in the end because once you get there, you can move mountains.',
  'If you don’t love something, you’re not going to go the extra mile, work the extra weekend, challenge the status quo as much.',
  'You’ve baked a really lovely cake, but then you’ve used dog shit for frosting.',
  'The heaviness of being successful was replaced by the lightness of being a beginner again — less sure about everything. It freed me to enter one of the most creative periods of my life.',
  'Sometimes life is going to hit you in the head with a brick. Don’t lose faith.',
  'If you keep your eye on the profit, you’re going to skimp on the product. But if you focus on making really great products, then the profits will follow.',
  'Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma — which is living with the results of other people’s thinking. Don’t let the noise of others’ opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition. They somehow already know what you truly want to become. Everything else is secondary.',
  'I’m convinced that about half of what separates the successful entrepreneurs from the non-successful ones is pure perseverance.',
  'Deciding what not to do is as important as deciding what to do.',
  'We’re here to put a dent in the universe. Otherwise why else even be here?',
  'But innovation comes from people meeting up in the hallways or calling each other at 10:30 at night with a new idea, or because they realized something that shoots holes in how we’ve been thinking about a problem.',
  'If you really look closely, most overnight successes took a long time.',
  'Let’s go invent tomorrow instead of worrying about what happened yesterday.',
  'Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.',
  'Design is not just what it looks like and feels like. Design is how it works.',
  'Here’s to the crazy ones — the misfits, the rebels, the troublemakers, the round pegs in the square holes. The ones who see things differently — they’re not fond of rules. You can quote them, disagree with them, glorify or vilify them, but the only thing you can’t do is ignore them because they change things. They push the human race forward, and while some may see them as the crazy ones, we see genius, because the ones who are crazy enough to think that they can change the world, are the ones who do.',
  'Stay hungry. Stay foolish.',
  );
  $API->TPL->assign('rs', $link_ticket['wait']);
  $API->TPL->assign('jobs_quote', $jobs_quotes[array_rand($jobs_quotes)]);
  $redirection_ticket = encrypt(json_encode(array('link' => $link_ticket['link'], 'time' => TIME + $link_ticket['wait'])), 'AA_REDIRECTOR_fsdfs');

  @header("Refresh: {$link_ticket['wait']}; URL={$API->SEO->make_link('redirector', 'rt', urlencode($redirection_ticket))}");

  $API->TPL->display('redirector.tpl');
  //@header("Location: " . getCoinUrl($link_ticket['link']));
  } else {
  $redirection_ticket = encrypt(json_encode(array('link' => $link_ticket['link'], 'time' => TIME)), 'AA_REDIRECTOR_fsdfs');
  @header("Location: {$API->SEO->make_link('redirector', 'rt', urlencode($redirection_ticket))}");
  }
  } */
?>