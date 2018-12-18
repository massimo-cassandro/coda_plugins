#!/usr/bin/perl

use strict;
use warnings;

my @lines       = <STDIN>;
my $new_output  = '';

if($#lines > 0) {
  my ($line);
  foreach $line (@lines) {
    $line =~ s/(^[ |\t]*)(.*)/$1\'$2\'\ +/;
    $new_output .= $line;
  }
  print $new_output;
}
