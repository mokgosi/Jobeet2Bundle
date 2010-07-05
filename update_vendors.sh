#!/bin/sh

CURRENT=`pwd`/vendor

# Symfony
cd $CURRENT/symfony && git pull

# Doctrine
cd $CURRENT/doctrine && git pull

# Doctrine migrations
cd $CURRENT/doctrine-migrations && git pull

# Doctrine MongoDB
cd $CURRENT/doctrine-mongodb && git pull

# Propel
cd $CURRENT/propel && svn up

# Phing
cd $CURRENT/phing && svn up

# Swiftmailer
cd $CURRENT/swiftmailer && git pull

# Twig
cd $CURRENT/twig && git pull

# Zend Framework
cd $CURRENT/zend && git pull
