<?php
class jayson_RAA_Extend_XenForo_Model_Avatar extends XFCP_jayson_RAA_Extend_XenForo_Model_Avatar {
    public function applyAvatar($userId, $fileName, $imageType = false, $width = false, $height = false, $permissions = false) {
        if ($imageType === IMAGETYPE_GIF && !XenForo_Visitor::getInstance()->hasPermission('avatar', 'jayson_raa_use_animated')) return $this->rejectAvatar();
        return parent::applyAvatar($userId, $fileName, $imageType, $width, $height, $permissions);
    }
    private function rejectAvatar() {
        throw new XenForo_Exception(new XenForo_Phrase('jayson_raa_cannot_use_animated'), true);
    }
}