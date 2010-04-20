<?php
class Lifestream_FormspringFeed extends Lifestream_Feed
{
	const ID		= 'formspring';
	const NAME		= 'Formspring';
	const URL		= 'http://www.formspring.me/';
	const LABEL		= 'Lifestream_AnsweredLabel';
	const CAN_GROUP	= false;
	const HAS_EXCERPTS	= true;

	function __toString()
	{
		return $this->get_option('username');
	}

	function get_options()
	{
		return array(
			'username' => array($this->lifestream->__('Username:'), true, '', ''),
		);
	}
	
	function get_public_url()
	{
		return 'http://formspring.me/'.urlencode($this->get_option('username'));
	}

	function get_url()
	{
		return 'http://formspring.me/profile/'.urlencode($this->get_option('username')).'.rss';
	}
	
	function yield($row, $url, $key)
	{
		$data = parent::yield($row, $url, $key);
		return $data;
	}
}
$lifestream->register_feed('Lifestream_FormspringFeed');
?>