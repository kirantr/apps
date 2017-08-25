#!/usr/bin/env perl 
#===============================================================================
#
#         FILE: text.pl
#
#        USAGE: ./text.pl  
#
#  DESCRIPTION: 
#
#      OPTIONS: ---
# REQUIREMENTS: ---
#         BUGS: ---
#        NOTES: ---
#       AUTHOR: YOUR NAME (), 
# ORGANIZATION: 
#      VERSION: 1.0
#      CREATED: 08/22/17 17:23:18
#     REVISION: ---
#===============================================================================

use strict;
use warnings;
use utf8;

sub readfile
    {
        my ($fileName)=@_;
    my @data=();
    open my $fh, "<test.html>";
    binmode($fh);
    while (<$fh>)
        {
            chomp($_)
            push @ data, $_;
        }
    
    close $fh;
    return join();
    return @data;
}

sub makeHash
{
my @data=@_;
my %langs=();
    while(@data)
    {
        my $line=shift@data;
        my($key, $value)=split('separator', $line)
        $lang{$key}=$value if($key);
    }
    return \%langs;

}

$html=~s/(\%LANG_ \w+)/$langs->{$1}/gse;
