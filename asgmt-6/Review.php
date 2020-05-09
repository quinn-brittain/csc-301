<?php

class Review {
  private $user = "DEGBUG_USER";
  private $raiting = true;
  private $commentsAllowed = true;
  private $date;
  private $body = null;

  public function __construct($user, $raiting, $commentsAllowed, $body) {
    $this->user = $user;
    $this->raiting = filter_var($raiting, FILTER_VALIDATE_BOOLEAN);
    $this->commentsAllowed = filter_var($commentsAllowed, FILTER_VALIDATE_BOOLEAN);
    $this->date = getdate();
    $this->body = htmlspecialchars($body);
  }

  public function getUser() {
    return $this->user;
  }

  public function getRaiting() {
    return $this->raiting;
  }
  
  public function getCommentsAllowed() {
    return $this->commentsAllowed;
  }
  
  public function getDate() {
    return $this->date;
  }

  public function getBody() {
    return $this->body;
  }

  public function getArray() {
    $review = [
      'user' => $this->user,
      'raiting' => $this->raiting,
      'commentsAllowed' => $this->commentsAllowed,
      'date' => $this->date,
      'reviewBody' => $this->body,
    ];
    return $review;
  }

  public function setUser($user) {
    $this->user = $user;
  }

  public function setRaiting($raiting) {
    $this->raiting = filter_var($raiting, FILTER_VALIDATE_BOOLEAN);
  }
  
  public function setCommentsAllowed($allow) {
    $this->commentsAllowed = filter_var($allow, FILTER_VALIDATE_BOOLEAN);
  }
  
  public function setDate($date) {
    $this->date = $date;
  }

  public function setBody($body) {
    $this->body = htmlspecialchars($body);
  }
}