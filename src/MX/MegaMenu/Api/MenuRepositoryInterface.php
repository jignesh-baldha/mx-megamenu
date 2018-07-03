<?php

namespace MX\MegaMenu\Api;

use MX\MegaMenu\Api\Data\MenuInterface;
use MX\MegaMenu\Model\Menu;
use Magento\Framework\Exception\NoSuchEntityException;

interface MenuRepositoryInterface
{
    /**
     * Save Menu data
     *
     * @param MenuInterface $menu
     * @return Menu
     * @throws CouldNotSaveException
     */
    public function save(MenuInterface $menu);

    /**
     * Load Menu data by given Menu Identity
     *
     * @param string $menuId
     * @return Menu
     * @throws NoSuchEntityException
     */
    public function getById($menuId);

    /**
     * Load Menu data by given Store Id
     *
     * @param $storeId
     * @return Menu
     */
    public function getByStoreId($storeId);

    /**
     * Delete Menu
     *
     * @param MenuInterface $menu
     * @return boolean
     * @throws CouldNotDeleteException
     */
    public function delete(MenuInterface $menu);

    /**
     * Delete Menu by given Menu Identity
     *
     * @param string $menuId
     * @return boolean
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($menuId);
}
