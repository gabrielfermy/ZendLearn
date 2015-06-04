<?php
namespace Blog\Model;

interface PostInterface
{
	// will return the ID of the blog Post
	public function getID();

	//will return the title of the blog post
	public function getTitle();

	//will return the content of the blog posts
	public function getText();
}