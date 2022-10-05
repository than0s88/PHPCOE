<?php


class ListNode{
    public $value;
    public $next = null;

    function __construct($value, $next)
    {
        $this->value = $value;
        $this->next = $next;
    }
}

class Problem2
{
   public function addTwoNumbers($l1, $l2) {
        $temphead = new ListNode(0);
        $curr = $temphead;
        $remainder = 0;

        while($l1 != null || $l2 != null || $remainder != 0){

            $x = ($l1)? $l1->value : 0;
            $y = ($l2)? $l2->value : 0;

            $sum = $x + $y + $remainder;
            $remainder = intval($sum / 10);
            $curr->next  = new ListNode($sum % 10);
            $curr = $curr->next;

            $l1 = ($l1 != null)? $l1->next : null;
            $l2 = ($l2 != null)? $l2->next : null;
        }

        return $temphead->next;
    }

}



$third = new ListNode(2, null);
$second = new ListNode(4,$third);
$head = new ListNode(3,$second);


$third2 = new ListNode(5,null);
$second2 = new ListNode(6,$third2);
$head2 = new ListNode(4,$second2);

$test = new Problem2();
$node = $test->addTwoNumbers($head, $head2);
while ($node->next != null){
    echo $node->value ."->";
    $node = $node->next;
}
echo "Null";