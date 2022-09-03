# Digital Ocean Serverless PHP demo

Info: https://docs.digitalocean.com/products/functions/quickstart/

### Init repository

init repository:

doctl serverless init --language php demo

### Status

Status: doctl serverless status

doctl serverless functions list

### Modify code

- modify project.yml (reference: https://docs.digitalocean.com/products/functions/reference/project-configuration/ )
- rename directory and php file

### Deploy

doctl serverless deploy demo-functions

### Invocation

doctl serverless functions invoke mint/trains

To pass parameters:

doctl serverless functions invoke mint/trains -p number:1234

### Logs

doctl serverless activations logs --limit 3

To execute a kind of tail -f use:

doctl serverless activations logs --follow --function mint/trains
