# Introduction

EXT:dmf_distributor_csv is providing a destination for EXT:dmf_distributor_core, which handles form submissions for various endpoints.

It is saving the form data by appending it to a CSV file.

# Setup

All basic settings, explained in EXT:dmf_distributor_core, (including the overwrite mechanics) apply to this extension as well.

## fileIdentifier
Set the path and filename to the CSV file that the form data shall be appended to.
Default: 0:/form-submits.csv

## delimiter
Set the delimiter character for the CSV file.
Default: ';'

## enclosure
Set the enclosure character for the CSV file.
Default: '"'
