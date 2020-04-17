from django.db import models
from jsonfield import JSONField

class Grille(models.Model):
    json = JSONField()
