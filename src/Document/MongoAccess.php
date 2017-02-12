<?php

namespace Abellion\ODM\Document;

trait MongoAccess
{
	public function bsonSerialize()
	{
		return $this->document;
	}

	public function bsonUnserialize(array $document)
	{
		self::fillFromSetter($document);
	}
}
