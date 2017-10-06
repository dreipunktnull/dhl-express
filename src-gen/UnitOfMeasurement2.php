<?php

namespace DHL\Express\Webservice;
/**
 * SI=the preferred system of weights and measures for Italian trade and commerce;
 * SU=the preferred system of weights and measures for U.S. trade and commerce;
 *
 * Weight unit: if Type is SI it can be KG (kilograms), if Type is SU it can be LB (pounds).
 * Dimention unit: if Type is SI it can be CM, if Type is SU it can be IN (inch)
 */
class UnitOfMeasurement2
{
    const __default = 'SI';
    const SI = 'SI';
    const SU = 'SU';
}
