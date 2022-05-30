<?php
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\PubSub\PubSubClient;

/**
 * Pulls all Pub/Sub messages for a subscription.
 *
 * @param string $projectId  The Google project ID.
 * @param string $subscriptionName  The Pub/Sub subscription name.
 */
function pull_messages($projectId, $subscriptionName)
{
    $pubsub = new PubSubClient([
        'projectId' => $projectId,
    ]);
    $subscription = $pubsub->subscription($subscriptionName);
    foreach ($subscription->pull() as $message) {
        printf('Message: %s' . PHP_EOL, $message->data());
        echo "<br>";
        // Acknowledge the Pub/Sub message has been received, so it will not be pulled multiple times.
        $subscription->acknowledge($message);
    }
}

for($i=0;$i<=10;$i++){
    echo "<strong>PULL ".$i."</strong><br>";
    pull_messages('incentro-spain-projects','poc-oscar-multiclient-sub');
    echo "<br>";
    flush();
    ob_flush();
    sleep(1);
}