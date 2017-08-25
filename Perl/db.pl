#!/usr/bin/env perl 
#===============================================================================
#
#         FILE: db.pl
#
#        USAGE: ./db.pl  
#
#  DESCRIPTION: i
#
#      OPTIONS: ---
# REQUIREMENTS: ---
#         BUGS: ---
#        NOTES: ---
#       AUTHOR: YOUR NAME (), 
# ORGANIZATION: 
#      VERSION: 1.0
#      CREATED: 08/25/17 16:18:03
#     REVISION: ---
#===============================================================================

use strict;
use warnings;
use utf8;
use DBI;

$db=user1;
$user='user1';
$passwd='tuser1';
$dbh=DBI->connect($db, $user, $passwd);
$dbh->quote();
$sth=$dbh->prepare('SELECT key FROM MY_TABLE WHERE key=?');
$cnt=$sth->exeuteuseru(user7);
while(my $row=$sth->fetchrow_hashref())
{
    print "@row\n"; 
}
$sth->finish();
$dbh->disconnect();
